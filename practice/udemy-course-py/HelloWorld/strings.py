print("Python's string are easy to use")
print("hello" + " world")
greeting = "Hello"
name = "Bruce"

# if we want want a space,, we can add that too
print(greeting + ' ' + name)

name_input = input("Please enter your name: ")
print(greeting + ' ' + name_input)

age = 24
print(age)

# describes the kind of information that we are storing
print(type(greeting))
print(type(age))

age_in_words = "2 years"
print(name + f" is  {age} years old")
print(type(age))

print(f"Pi is approximately {22 / 7:12.50f}")
pi = 22 / 7
print(f"Pi is approximately {pi:12.50f}")