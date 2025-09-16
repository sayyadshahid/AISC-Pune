# 14. Check if a key exists in dictionary and replace with another key/value pair

my_dict = {
    1: "apple",
    2: "banana",
    3: "cherry"
}

print("Original dictionary:", my_dict)


old_key = int(input("Enter the key you want to check: "))

if old_key in my_dict:
    new_key = int(input("Enter new key: "))
    new_value = input("Enter new value: ")

    my_dict.pop(old_key)
    my_dict[new_key] = new_value
    print("Updated dictionary:", my_dict)
else:
    print("Key does not exist in dictionary.")
