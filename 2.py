import re

# username = input("Enter your username:")
# password = input("Enter string to test: ")


def is_username_valid(user):
    # Batasi hanya char a-z atau A-Z sepanjang 6 karakter
    if re.match(r"[a-zA-Z]{6}$", user):
        return True
    else:
        return False


def is_password_valid(pwd):
    # special characters yang dibolehkan: #@$_-
    # karena 7 harus diawal, maka panjang password menjadi 4-9 char
    if re.match(r"^(7)(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[@#$_-])[\w\d@#$_-]{4,9}$", pwd):
        return True
    else:
        return False


ojan = is_username_valid('HauzaN')
pwd = is_password_valid('78Ert@df')
print(ojan)
print(pwd)
