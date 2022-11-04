import uuid
from docx2python import docx2python


def list(path):
    doc_result = docx2python(path)
    body_table = doc_result.body
    idx = 0
    i_body = 0
    for a in body_table:
        for b in a:
            for c in b:
                for d in c:
                    if d == "4)\tList of Measuring Equipment":
                        i_body = idx
        idx += 1

    data = body_table[i_body+1]
    result = []
    index = 1
    while index < len(data):
        idx_arr = 0
        container = []
        while idx_arr < len(data[index]):
            container.append(data[index][idx_arr][0])
            idx_arr += 1
        result.append(container)
        print('\n')
        index += 1

    return result
