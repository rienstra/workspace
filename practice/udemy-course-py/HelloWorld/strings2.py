#
#         01234567890123
# parrot = "Norwegian Blue"

# print(parrot)

# print(parrot[3])

# output = "we win"
# print(output[1])
# print()
# print(output[3])
# print(output[4])
# print(output[5])

# print()

# print(parrot[-11])
# print(parrot[-10])
# print(parrot[-5])
# print(parrot[-11])
# print(parrot[-8])
# print(parrot[-6])

# print(parrot[0:6])      # Norweg
# print(parrot[-14:-8])   # Norweg
# print(parrot[3:5])      # we
# print(parrot[0:9])      # Norwegian
# print(parrot[:9])       # Norwegian
# print(parrot[10:14])    # Blue
#
# print(parrot[:6] + parrot[6:])  # Norwegian Blue
#
# print(parrot[-4:-2])    # Bl
# print(parrot[-4:12])    # Bl
#
# print(parrot[0:6:2])    # Nre
# print(parrot[0:6:3])    # Nw
#
# number = "9,223;372:036 854,775;807"
# seperators = number[1::4]
# print(seperators)  # ,,,,,,
#
# values = "".join(char if char not in seperators else " " for char in number).split()
# print([int(val) for val in values])
#
# computer_parts = ["computer", "monitor", "keyboard", "mouse", "mouse mat"]
# print(computer_parts[1])  # monitor
# print(computer_parts[1][0])  # m

number = input("Please enter a series of numbers, using any seperators you like: ")
seperators = ""

for char in number:
    if not char.isnumeric():
        seperators = seperators + char

# print(seperators)  # ,,,,,,

values = "".join(char if char not in seperators else " " for char in number).split()
print(sum([int(val) for val in values]))

