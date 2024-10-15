<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
	<head>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        	<h1 class="font-bold text-5xl text-center mb-8"> Add Notes </h1>


        <div class="mb-6">
        	<form class="flex flex-col space-y-4" method="POST" action="{{ route('storeNote')}}">
				@csrf
				@method('POST')

				<input type="text" id='title' name="title" placeholder="Add Note Title" class="py-3 px-4 bg-gray-100">

				<textarea id='desc' name="desc" placeholder= "Note Description" class="py-3 px-4 bg-gray-100"> </textarea>

				<button type='submit' class="my-profile-button"> Add </button>
        	</form>
			<div class="mt-2">
				<div class="py-4 flex items-center border-b border-gray-300 px-3">
					<div class="flex-1 pr-8">
						<h3 class="text-lg font-semibold">
							Title
						</h3>
						<p class="text-gray-500">Description</p>
					</div>
	
			<div class="flex space-x-3">
				<button class="check-button">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 20 24" stroke-width="1.5" stroke="currentColor" class="size-6">
				<path stroke-linecap="round" stroke-linejoin="round" d = "m4.5 12.75 6 6 9-13.5" />
				</svg>                 
				</button>

				<button class="delete-button">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-5 -5 35 35" stroke-width="1.5" stroke="currentColor" class="size-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
					  </svg>									  
					</button>
				</div>
			</div>
    	</div>
    
    		<hr>

    	
      	</div>    
    	</div>
  </body>
  
</html>


