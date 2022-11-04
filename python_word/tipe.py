from docx2python import docx2python


def TypeModel(path):

    doc_result = docx2python(path)
    text = doc_result.text

    typemo_arr = []
    index = 100

    while index < 1700:
        tymo_loop = index
        if text[tymo_loop] == "T" and text[tymo_loop + 1] == "y" and text[tymo_loop + 2] == "p" and text[tymo_loop + 3] == "e" and text[tymo_loop + 4] == "/" and text[tymo_loop + 5] == "M" and text[tymo_loop + 6] == "o" and text[tymo_loop + 7] == "d" and text[tymo_loop + 8] == "e" and text[tymo_loop + 9] == "l":
            while tymo_loop < 1700:
                if text[tymo_loop] == "C" and text[tymo_loop + 1] == "a" and text[tymo_loop + 2] == "p" and text[tymo_loop + 3] == "a" and text[tymo_loop + 4] == "c" and text[tymo_loop + 5] == "i" and text[tymo_loop + 6] == "t" and text[tymo_loop + 7] == "y":
                    break
                else:
                    typemo_arr.append(text[tymo_loop])
                tymo_loop += 1
        index += 1

    typeModel = ''
    for i in typemo_arr:
        typeModel += i

    typeModel = typeModel.split('\n')

    i = 0
    while i < len(typeModel):
        if typeModel[i] == 'Type/Model':
            typeModel.remove('Type/Model')
        if typeModel[i] == '':
            typeModel.remove('')
        if typeModel[i] == ':':
            typeModel.remove(':')
        i += 1

    return ''.join(typeModel)
