def thirdHighest(thelist):
    if isinstance(thelist, list):
        arr = [e for e in thelist if isinstance(e, int)]
        arr.sort()
        if len(arr) > 2:
            print(arr[-3])
        else:
            print("Minimal array length is 3!")
    else:
        print("Parameter should be an array!")


thirdHighest([1, 2, '3', 7, 5, 0.1])
thirdHighest("jahgsvdb")
thirdHighest([3, 1])
