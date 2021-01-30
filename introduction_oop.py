{
 "metadata": {
  "language_info": {
   "codemirror_mode": {
    "name": "ipython",
    "version": 3
   },
   "file_extension": ".py",
   "mimetype": "text/x-python",
   "name": "python",
   "nbconvert_exporter": "python",
   "pygments_lexer": "ipython3",
   "version": "3.8.5-final"
  },
  "orig_nbformat": 2,
  "kernelspec": {
   "name": "python3",
   "display_name": "Python 3",
   "language": "python"
  }
 },
 "nbformat": 4,
 "nbformat_minor": 2,
 "cells": [
  {
   "source": [
    "\"\"\"\n",
    "object oriented means directed towards objects ...in other words it means functionality directed towards modelling objects \n",
    "->python oop is away of programming that\n",
    "focusses on using object and classes to design and build applications \n",
    "->the major pillars of oop are:\n",
    "    -inheritance\n",
    "    -polymophism\n",
    "    -abstarction\n",
    "    -encapsulation\n",
    "-Object oriented analysis 00A is the process of examining a problem system or task and identifying the object and interaction between them\n",
    "-\n",
    "#why use oop\n",
    "#provides clear program structure which makes it easy to map real world problems\n",
    "# facilitate easy maintainance and modification of existing code \n",
    "# enhance proggram modularity because each object exist independently and new features can be added easily without disturbing existing ones \n",
    "# presents a good frame work for code libraries where suppliedcomponents can be easily adapted and modified by the programmer \n",
    "# imparts code reusability     \n",
    "\"\"\""
   ],
   "cell_type": "markdown",
   "metadata": {}
  },
  {
   "source": [
    "#MODULES VS CLASSES AND OBJECTS\n",
    "\"\"\"\n",
    "When working on modules note the following points\n",
    "    -a pyhton module ia a package to encapsulatereusable code\n",
    "    -module reside in a folder with a __init__.py file on it\n",
    "    -modules contain functions and classes \n",
    "    -modukes are imported using the import key word \n",
    "    consider the below code{\n",
    "        # this goes in employee.py\n",
    "        def EmployeID():\n",
    "            print (“Employee Unique Identity!”)\n",
    "\n",
    "        #one can now import the module and use the function employeeID\n",
    "        # Consider the code below(saved as employee.py)\n",
    "        import employee\n",
    "        employee.EmployeeID()   \n",
    "    }\n",
    "\"\"\""
   ],
   "cell_type": "code",
   "metadata": {},
   "execution_count": null,
   "outputs": []
  },
  {
   "cell_type": "code",
   "execution_count": 4,
   "metadata": {},
   "outputs": [
    {
     "output_type": "stream",
     "name": "stdout",
     "text": [
      "<class '__main__.computer'>\ni5 16gb 1Tb\n"
     ]
    }
   ],
   "source": [
    "#classes and Objects\n",
    "\"\"\"\n",
    "A class is a factory for an instance \n",
    "Classes are like modules \n",
    "write the design of the object \n",
    "class is a blue print of an object\n",
    "-before creating an object create a class \n",
    "\n",
    "\"\"\"\n",
    "class computer:\n",
    "    #attributes and behaviour\n",
    "    #this arevariables and methods \n",
    "    def config(self):\n",
    "        print(\"i5\",\"16gb\",\"1Tb\")\n",
    "comp_one=computer()\n",
    "#the object comp_one belongs to class cmputer\n",
    "print(type(comp_one)) \n",
    "#call the method\n",
    "comp_one.config()       \n"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": null,
   "metadata": {},
   "outputs": [],
   "source": [
    "def edureka():\n",
    "    def local_fun():\n",
    "        name=\"pyhton\"\n",
    "    def non_local():\n",
    "        nonlocal name\n",
    "            "
   ]
  }
 ]
}