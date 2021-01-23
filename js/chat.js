function ajax(argument) {
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', '../conexion/chat.php', true);
			req.send();
			//var objDiv = document.getElementById("chat");
    		//objDiv.scrollTop = objDiv.scrollHeight;
   			var objDiv = document.getElementById("chat");
    		objDiv.scrollTop = objDiv.scrollHeight;
		}

		//linea que hace que refresque la pagina cada segundo
			setInterval(function(){ajax(); console.clear();}, 1000);