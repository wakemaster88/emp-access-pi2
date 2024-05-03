import requests

# Die URL der REST-API, zu der Sie die Daten senden möchten
api_url = 'https://twincable.emp-access.de/api_gate.php?hardware=1&id='  # Ersetzen Sie dies mit Ihrer API-URL

while True:
	# Eingabe von der Tastatur erfassen
	user_input = input("Geben Sie Ihren Text ein (oder 'exit' zum Beenden): ")

	# Wenn der Benutzer 'exit' eingibt, beenden wir die Schleife
	if user_input.lower() == 'exit':
		print("Programm wird beendet...")
		break

	# Die Daten, die an die REST-API gesendet werden sollen
	data = {
		'input_text': user_input  # Erstellen Sie ein passendes Datenfeld
	}

	# Senden der POST-Anfrage
	try:
		response = requests.post(api_url, json=data)

		# Überprüfen, ob die Anfrage erfolgreich war
		if response.status_code == 200:
			print("Daten erfolgreich gesendet!")
		else:
			print("Fehler beim Senden der Daten:", response.status_code)

	except requests.exceptions.RequestException as e:
		print("Ein Fehler ist aufgetreten:", str(e))
