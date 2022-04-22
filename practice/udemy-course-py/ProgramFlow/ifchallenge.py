name = input("Enter you name: ")
age = int(input("Enter your age: "))

if 18 <= age < 31:
    print("Hello {}, welcome to the holiday".format(name))
elif age < 18:
    print("I am sorry {}, you are not old enough".format(name))
else:
    print("I am sorry {}, you're to old".format(name))