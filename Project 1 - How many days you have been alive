#Python3 file

#Counter for the days
i=10

#birth date input
year = (int(input("What is the birth year? ")))
month = (int(input("What is the birth month? ")))
day = (int(input("What is the birth day? ")))

#current date input
y_date = (int(input("What is the current year? ")))
m_date = (int(input("What is the current month? ")))
d_date = (int(input("What is the current day? ")))


#While statement loop
while year != y_date or month != m_date or day != d_date:
    if month == 1 and day == 31:
        month = 2
        day = 1
    elif month == 2 and year%4 == 0 and day == 29:
        month = 3
        day = 1
    elif month == 2 and year%4 != 0 and day == 28:
        month = 3
        day = 1

    elif month == 3 and day == 31:
        month = 4
        day =1
            
    elif month == 4 and day == 30:
        month = 5
        day =1

    elif month == 5 and day == 31:
          month = 6
          day =1

    elif month == 6 and day == 30:
        month = 7
        day =1

    elif month == 7 and day == 31:
         month = 8
         day =1

    elif month == 8 and day == 31:
         month = 9
         day =1

    elif month == 9 and day == 30:
        month = 10
        day =1

    elif month == 10 and day == 31:
         month = 11
         day =1

    elif month == 11 and day == 30:
        month = 12
        day =1

    elif month == 12 and day == 31:
        year = year + 1
        month = 1
        day =1
    else:
        day = day + 1
  
    #Continuing the counter
    i = i + 1
        
#Sentence to go with the days counted

print ("\nYou have been alive for: ", i , "Days!\nAint you old!")
