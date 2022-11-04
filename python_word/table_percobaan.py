from docx2python import docx2python


def emisiResult(path):
    doc_result = docx2python(path)
    body_table = doc_result.body
    # index = 0
    # for i in body_table:
    #     if i == 'Average':
    #         print(index)
    #     index += 1
    print(body_table)


emisiResult('word/table.docx')
