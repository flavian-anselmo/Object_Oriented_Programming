#why use classes
class employee:

#instance variables 
    """contains data that is unique 
        to each instance """
emp_one=employee()
emp_two=employee()

print(emp_one)
print(emp_two)

emp_one.first='anselmo'
emp_one.last='flavian'
emp_one.email='anselmo@gmail.com'

emp_two.first='leon'
emp_two.last='otieno'
emp_two.email='leo@gmail.com'
"""
    intead of doing the above ,we can create a constarctor or init
    method that allows as to create ht
"""

#to show that the instances are unique print the email of each employee
print(emp_one.email)
print(emp_two.email)
'''
in object oriented programming 
an instance ia aconcrete occurence
of any object 
in oop objects are created from classes by 
subroutines called coantsractors and destroyed 
by destractors 
*an object is an instance of a class and my be called 
a class instance 
for example an object that belongs to a class circle 
is an instance of the class circle 

'''