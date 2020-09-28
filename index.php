<html>
<head>
    <meta charset="utf-8">
    <meta lang="pt-BR">
    <title> Desafio FW7 - Geferson </title>
    
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
    <script src='fullcalendar/lib/jquery.min.js'></script>
    <script src='fullcalendar/lib/moment.min.js'></script>
    <script src='fullcalendar/fullcalendar.js'></script>
    <script src='fullcalendar/lang/pt-br.js'></script>
        
    <script>
       $(document).ready(function() {	
            $('#calendario').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultDate: '2020-09-24',
                editable: true,
                eventLimit: true, 
                events: 'eventos.php',           
                eventColor: '#dd6777'
            });	
            
            $('#novo_evento').submit(function(){
                var dados = jQuery(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "cadastrar_evento.php",
                    data: dados,
                    success: function(data)
                    {   	
						location.reload();
                    }
                });                
                return false;
            });	
	   }); 
                
    </script>
    
    <style>
		* {
			font-family:Arial;
		}
		
        #calendario{
            position: relative;
            width: 70%;
            margin: 0px auto;
			background-color:#0f0f0f;
        }        
		
		.fc-widget-header {
			background-color:grey;
		}
		
		.fc-widget-content {
			background-color:black;
		}
		
		.fc-day-number, .fc-day-header {
			color: blue;
		}
		
		.fc-time {
			color: blue;
		}
		
		.formulario {
			color: blue;
		}
		
		.fc-button-group {
			color:blue;
		}
		
		.fc-day-number {
		}
    </style>
    
</head>
<body>    
    <div id='calendario'>
        <br/>
        <form id="novo_evento" action="" method="post" class="formulario">
            Nome do Evento: <input type="text" name="nome" required/><br/><br/>
            Data do Evento: <input type="date" name="data" required/>
            Inicio: <input type="time" name="inicio" />
            Data Final: <input type="date" name="data_fim"/>
            Fim: <input type="time" name="fim" /><br/><br/>
            <button type="submit"> Cadastrar novo evento </button>
        </form>
    </div>
</body>
</html>
