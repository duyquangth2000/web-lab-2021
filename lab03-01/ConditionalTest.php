<html>

<head>
    <title>Conditional Test</title>
</head>

<body>
    <?php
    $first = $_GET["firstName"];
    $middle = $_GET["middleName"];
    $last = $_GET["lastName"];
    print("Hi $first! Your full name is $last $middle $first. <br>");
    if ($first == $last) {
        print("$first and $last are equal");
    }
    if ($first < $last) {
        print("$first is less than $last");
    }
    if ($first > $last) {
        print("$first is greater than $last");
    }
    print("<br>");

    $grade1 = $_GET["grade1"];
    $grade2 = $_GET["grade2"];
    $final = (3 * $grade1 + 7 * $grade2) / 10;
    
    if ($final >= 8.5) {
        print("Your final grade is $final. You got an A. Congratulation!");
        $rate = "A";
    } elseif ($final > 8) {
        print("Your final grade is $final. You got a B+");
        $rate = "B";
    } elseif ($final >= 7) {
        print("Your final grade is $final. You got a B");
        $rate = "B";
    } elseif ($final >= 6.5) {
        print("Your final grade is $final. You got a C+");
        $rate = "C";
    } elseif ($final >= 5.5) {
        print("Your final grade is $final. You got a C");
        $rate = "C";
    } elseif ($final >= 5) {
        print("Your final grade is $final. You got a D+");
        $rate = "D";
    } elseif ($final >= 4) {
        print("Your final grade is $final. You got a D");
        $rate = "D";
    } elseif ($final >= 0) {
        print("Your final grade is $final. You got a F");
        $rate = "F";
    } else {
        print("Illegal grade less than 0. Final grade = $final");
        $rate = "Illegal";
    }

    print("<br>");
    switch ($rate) {
        case 'A':
            # code...
            print("Excelent!");
            break;
        case 'B':
            print("Good!");
            # code...
            break;
        case 'C':
            # code...
            print("Not Bad!");
            break;
        case 'D':
            # code...
            print("Normal!");
            break;
        case 'F':
            # code...
            print("You have to try again!");
            break;
        default:
            # code...
            print("Illegal grade");
            break;
    }
    ?>
</body>

</html>
