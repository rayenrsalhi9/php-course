<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        ** Data types in mysql ** 
            1) int / int(10): size of number
            2) bigint for bigger int
            3) float
            4) double for bigger float
            5) varchar(n) : n chars as a string (n <= 255)
            6) text for bigger varchar
            7) date

            int(10) signed : can be negative
            int(10) unsigned : can not be negative

            -> you can assign a primary key by adding primary key to 
            your attribute or just at the end type primary key (attribute_name)

            -> when in foreign key, default value is :
                * on delete no action
                * on delete cascade : when delete primary, delete all its
                relatives
                * on delete set null : when delete primary, set the 
                foreign attribute to null, but check it doesn't contain
                not null option when declaring

            -> left join : show all table selected first, even if it doesn't
            meet the requirements
    -->
</body>
</html>