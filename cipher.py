text = input("enter text")
key = 2

encrypt = ""
for ch in text:
    encrypt = encrypt + chr(ord(ch) + key)

print(encrypt)


decrypt = "" 
for ch in encrypt:
    decript += chr(ord(ch) - key)

print(decript)