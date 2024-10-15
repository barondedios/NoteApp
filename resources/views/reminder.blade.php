<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <div class="header">
        <a href='notes'>
            <button class="my-notes-button">
                My Notes
            </button>
        </a>

        <a href='reminder'>
            <button class="reminder-button">
                Reminder
            </button>
        </a>
        
        <a href='task-tracker'>
            <button class="task-tracker-button">
                Task Tracker
            </button>
        </a>

        <a href='my-profile'>
            <button class="task-tracker-button">
                My Profile
            </button>
        </a>
    </div>
    </div>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel = "stylesheet">

    <style>
        .header {
			background: #ffffff;
			color: white;
			margin-bottom: 20px;
			height: 70px;

}
      
        .noted-logo{
			margin-left: 25px;
			font-size: 30px;
  }
        .my-notes-button {
			background-color: white;
			color: rgb(0, 0, 0);
			border-color: rgb(0, 0, 0);
			border-style: solid;
			border-width: 1px;
			height: 30px;
			width: 101px;
			border-radius:2px;
			cursor: pointer;
			margin-right: 8px;
			margin-left: 980px;
			margin-top:20px;
			margin-bottom: 50px;
			transition: background-color 0.2s,
			color 0.2s, box-shadow 0.15s;
      
  }
        .reminder-button {
			background-color: white;
			color: rgb(0, 0, 0);
			border-color: rgb(0, 0, 0);
			border-style: solid;
			border-width: 1px;
			height: 30px;
			width: 101px;
			border-radius:2px;
			cursor: pointer;
			margin-right: 8px;
			transition: background-color 0.2s,
			color 0.2s, box-shadow 0.15s;
      
  }
  
        .task-tracker-button {
			background-color: white;
			color: rgb(0, 0, 0);
			border-color: rgb(0, 0, 0);
			border-style: solid;
			border-width: 1px;
			height: 30px;
			width: 101px;
			border-radius:2px;
			cursor: pointer;
			margin-right: 8px;
			transition: background-color 0.2s,
			color 0.2s, box-shadow 0.15s;
  }

        .my-profile-button {
			background-color: rgb(37, 37, 37);
			color: white;
			border: none;
			height: 38px;
			width: 108px;
			border-radius: 2px;
			cursor: pointer;
			transition: background-color 0.2s,
			box-shadow 0.15s;
  }

		.check-button {
			background-color: rgb(37, 37, 37);
			color: white;
			border: none;
			height: 30px;
			width: 30px;
			border-radius: 2px;
			cursor: pointer;
			transition: background-color 0.2s,
			box-shadow 0.15s;
		}

        .my-profile-button:hover {
      
        	box-shadow: 5px 5px 10px rgba(63,63,63, 0.35)
      
  }
        .my-profile-button:active {
        	background-color: gray;
  }

        .my-notes-button:hover {
			background-color: rgb(37, 37, 37);
			color: white;
			box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);

  }
        .my-notes-button:active {
			opacity: 0.7s;
			background-color: gray;
			border: none;
  }   

        .reminder-button:hover {
			background-color: rgb(37, 37, 37);
			color: white;
			box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);

  }
        .reminder-button:active {
			opacity: 0.7s;
			background-color: gray;
			border: none;
  }

        .task-tracker-button:hover {
			background-color: rgb(37, 37, 37);
			color: white;
			box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);

  }
        .task-tracker-button:active {
			opacity: 0.7s;
			background-color: gray;
			border: none;
  }		

  		.check-button:hover {
        	box-shadow: 5px 5px 10px rgba(63,63,63, 0.35)
		}

		.check-button:active {
        	background-color: gray;			
		}

    </style>
</head>
<body class = "bg-gray-200 p-4">
    	<div class="lg:w-2/4 mx-auto py-8 px-6 bg-white">
        	<h1 class="font-bold text-5xl text-center mb-8"> Reminder </h1>
        </div>
</body>
</html>