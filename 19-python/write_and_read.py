class User_manager:
    def __init__(self) -> None:
        self.employees = [
            { "name": "Yohan", "lastName": "Angulo", "age": 25 },
            { "name": "Erin", "lastName": "Useche", "age": 38 },
            { "name": "Magdalena", "lastName": "Useche", "age": 68 },
        ]

        f = open('employees.txt', 'w')
        
        for employee in self.employees:
            string = "{name}||{lastName}||{age}\n".format(**employee)
            f.write(string)
        f.close()
    
    def convert_back(self):
        f = open('employees.txt', 'r')
        lines = f.readlines()
        self.employees = []
        for line in lines:
            name, lastName, age = line.strip().split("||")
            self.employees.append({"name": name, "lastName": lastName, "age": age})
        print(self.employees)


if __name__ == '__main__':
    User_manager().convert_back()