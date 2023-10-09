# Automated Payroll Application

The purpose of an automated payroll application is to keep track of the attendance as well as payroll (salary) of the employees in an organization. In such an organization, employees are constantly deployed on-site at various client locations. Hence, the location of the employees needs to be tracked by the organization in order to calculate their attendance and payroll. The advantage of having such an application is manifold as explained below:

- This System helps the admin to keep track of the employees who go for field work.
- Since GPS location of the employee is tracked, so the employee will not attempt to add proxy attendance.
- This application helps admin and HR to easily check the salary of the employee.

This application is meant for Onsite Employees, HR, and Admin whose roles have been defined below:

## Role of Employee:

- The user will login to the system, and his image will be captured along with his GPS location, and all the information will be sent to the admin where the admin will view the image and GPS location.
- Once logged in, the GPS location of the employee will be tracked automatically by the system and sent to the admin every 5 minutes. For tracking GPS location, you may opt for using available GPS libraries in your implementation.
- When the user logs out, the system will capture the image as well as the GPS location and send it to the admin.

## Role of Admin:

- The role of the admin is to add a new employee by entering his personal details and provide the employee with an employeeID and password so that he can access the application.
- Admin can view the GPS location of the employee by entering the Employee Identity Number as well as the Date. (Use Google maps to display the various locations of an employee).
- Admin can check the salary of the particular employee by entering the date and employee ID.
- Admin can view the latitude and longitude of the GPS location sent by the employee.
- Admin can change the password of the employee.

## Role of HR:

- When the HR logs in to the system, he can check the GPS location of the employee by entering the employee ID and date.



 
- HR can check the salary of the particular employee by entering the employee ID and date.

## Demo
[Demo](https://github.com/thelo09/Automated-Payroll-with-GPS-Tracking-and-Image-Capture/assets/137653186/85149b37-c269-43f0-bc5b-e7bc5ca481dd)

