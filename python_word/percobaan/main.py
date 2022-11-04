# from cgitb import text
# import docx2txt
from docx2python import docx2python
# import docx
# from docx import Document

# text_docx = docx2txt.process("word/052-EMC-2021.docx")

# for i in text_docx:
#     print(i)

# print(arr)

# text_docx2 = docx.Document('word/052-EMC-2021.docx')
# result = [p.text for p in text_docx2.paragraphs]
# print(result)
# f = open('word/052-EMC-2021.docx', 'rb')
# document = Document(f)
# result = [p.text for p in document]
# print(result)
# f.close()
# print(result)

doc_result = docx2python('word/table.docx')
# print(doc_result)
# print(doc_result.body[0][0])
# print(len(doc_result.body[0]))

len_body = len(doc_result.body[0])
body_table = doc_result.body[0]
baris = 0
while baris < len_body:
    len_column = len(body_table[baris])
    body_column = body_table[baris]
    column = 0
    while column < len_column:
        print(body_column[column])
        column += 1
    baris += 1


# print(doc_result.body[0][0][0][0])
