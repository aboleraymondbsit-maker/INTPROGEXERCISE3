<?php
// Team member information
$team = [
    [
        "name" => "Raymond Abole",
        "image" => "raymond.jpg",
        "age" => 20,
        "course" => "BS Information Technology",
        "skills" => "HTML, CSS, JavaScript",
        "hobbies" => "Coding, Gaming, Music",
        "description" => "Hi! I'm Raymond Abole, a 20 year old who enjoys going out, riding motorcycles, and playing basketball. I also like buying and selling items related to different types of games. I have a fundamental knowledge of programming and enjoy learning more about technology."
    ],

    [
        "name" => "Remuel Khent Lasala",
        "image" => "remuel.jpg",
        "age" => 21,
        "course" => "BS Information Technology",
        "skills" => "HTML, CSS, JAVA",
        "hobbies" => "Watch anime, Gaming, Read books",
        "description" => "Hi! I'm Remuel Khent C. Lasala, 21 years old. I like to play online games and I love to watch anime, movies and more. I also have basic fundamental knowledge of programming."
    ]
];

// GET method
if (isset($_GET['member'])) {
    $index = $_GET['member'];

    if (is_numeric($index) && isset($team[$index])) {
        $selectedMember = $team[$index];
    } else {
        $selectedMember = null;
    }
} else {
    $selectedMember = null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our Team</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #45527c, #878592);
            min-height: 100vh;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 40px 20px;
        }

        header {
            text-align: center;
            margin-bottom: 40px;
        }

        header h1 {
            font-size: 42px;
            color: white;
            margin-bottom: 10px;
        }

        .team {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .member {
            background: white;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.10);
            transition: 0.3s;
        }

        .member:hover {
            transform: translateY(-8px);
        }

        .member img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #0e1e60;
            margin-bottom: 20px;
        }

        .member h2 {
            font-size: 26px;
            margin-bottom: 15px;
            color: #312e81;
        }

        .member > p {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .details {
            text-align: left;
            background: #f8fafc;
            padding: 15px;
            border-radius: 12px;
            margin-top: 15px;
        }

        .details p {
            margin: 8px 0;
            color: #334155;
            line-height: 1.5;
        }

        .buttons {
            text-align: center;
            margin-bottom: 30px;
        }

        .buttons a {
            display: inline-block;
            background: white;
            color: #312e81;
            text-decoration: none;
            padding: 12px 20px;
            margin: 5px;
            border-radius: 10px;
            font-weight: bold;
        }

        .buttons a:hover {
            background: #312e81;
            color: white;
        }

        .message {
            text-align: center;
            color: white;
            font-size: 20px;
        }

        @media (max-width: 700px) {
            .team {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <header>
        <h1>THE TEAM</h1>
    </header>

    <!-- GET links -->
    <div class="buttons">
        <a href="?member=0">Raymond Abole</a>
        <a href="?member=1">Remuel Khent Lasala</a>
    </div>

    <section class="team">

        <?php if ($selectedMember): ?>

            <div class="member">

                <img
                    src="<?php echo htmlspecialchars($selectedMember['image']); ?>"
                    alt="<?php echo htmlspecialchars($selectedMember['name']); ?>"
                >

                <h2>
                    <?php echo htmlspecialchars($selectedMember['name']); ?>
                </h2>

                <p>
                    <?php echo htmlspecialchars($selectedMember['description']); ?>
                </p>

                <div class="details">

                    <p>
                        <strong>Age:</strong>
                        <?php echo htmlspecialchars($selectedMember['age']); ?>
                    </p>

                    <p>
                        <strong>Course:</strong>
                        <?php echo htmlspecialchars($selectedMember['course']); ?>
                    </p>

                    <p>
                        <strong>Skills:</strong>
                        <?php echo htmlspecialchars($selectedMember['skills']); ?>
                    </p>

                    <p>
                        <strong>Hobbies:</strong>
                        <?php echo htmlspecialchars($selectedMember['hobbies']); ?>
                    </p>

                </div>

            </div>

        <?php else: ?>

            <p class="message">
              Please select a team member.
            </p>

        <?php endif; ?>

    </section>

</div>

</body>
</html>

