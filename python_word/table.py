from docx2python import docx2python


def emisiResult(path):
    doc_result = docx2python(path)
    body_table = doc_result.body
    i_body = 0
    table_index = 0
    for i in body_table:
        # print(i)
        for n in i:
            for x in n:
                if x == ['\t\tEmission Tests']:
                    table_index = i_body
        i_body += 1

    data_table = body_table[table_index]
    len_data_table = len(data_table)
    data = []
    idx_data = 0
    while idx_data < len_data_table:
        if idx_data != 0 and idx_data != len_data_table-1:
            data.append(data_table[idx_data])
        idx_data += 1

    nomor = []
    standar = []
    item_test = []
    detector = []
    measurement = []
    suitability = []
    idx = 2
    while idx < len(data):
        # get nomor
        nomor.append(data_table[idx][0])

        # get standar
        standar.append(data_table[idx][1])

        # get Item Test
        item_test.append(data_table[idx][2])

        # get Detector
        detector.append(data_table[idx][3])

        # get Measurement
        measurement.append(data_table[idx][4])

        # get Suitability
        suitability.append(data_table[idx][5])

        idx += 1

    print("| No. |   TGL   |     Item Uji     |   Spesifikasi   |    Hasil Uji   |")
    print("| ", nomor[0][0], " |   27/01/2022    |", item_test[0][0])


emisiResult('word/105-EMC-2021.docx')
