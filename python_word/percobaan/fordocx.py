import docx
text_docx2 = docx.Document('word/052-EMC-2021.docx')
result = [p.text for p in text_docx2.paragraphs]
print(result)
