from docx2python import docx2python


def capacity(path):

    doc_result = docx2python(path)
    text = doc_result.text
    capacity_arr = []
    index = 1000

    while index < 1700:
        capacity_loop = index
        if text[capacity_loop] == "C" and text[capacity_loop + 1] == "a" and text[capacity_loop + 2] == "p" and text[capacity_loop + 3] == "a" and text[capacity_loop + 4] == "c" and text[capacity_loop + 5] == "i" and text[capacity_loop + 6] == "t" and text[capacity_loop + 7] == "y":
            while capacity_loop < 1700:
                if text[capacity_loop] == "S" and text[capacity_loop + 1] == "e" and text[capacity_loop + 2] == "r" and text[capacity_loop + 3] == "i" and text[capacity_loop + 4] == "a" and text[capacity_loop + 5] == "l" and text[capacity_loop + 6] == " " and text[capacity_loop + 7] == "n" and text[capacity_loop + 8] == "u" and text[capacity_loop + 9] == "m" and text[capacity_loop + 10] == "b" and text[capacity_loop + 11] == "e" and text[capacity_loop + 12] == "r":
                    break
                else:
                    capacity_arr.append(text[capacity_loop])
                capacity_loop += 1
        index += 1

    capacity = ''
    for i in capacity_arr:
        capacity += i

    capacity = capacity.split('\n')

    for i in capacity:
        if i == 'Capacity':
            capacity.remove('Capacity')
    for i in capacity:
        if i == '':
            capacity.remove('')
    for i in capacity:
        if i == ':':
            capacity.remove(':')

    return ''.join(capacity)
