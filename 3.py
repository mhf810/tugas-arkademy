def sortNumber(str):
    lst = [int(n) for n in str if n.isdigit()]
    lst.sort()
    if lst != []:
        for i in lst:
            print(i, end="")
    else:
        print("No number found in parameter!")
    return lst
# y = int(''.join(lst))
# y = lst.sort()


sortNumber("9abc4")
