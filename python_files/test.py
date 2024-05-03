import requests

# Die URL der REST-API, zu der Sie die Daten senden möchten
api_url = 'https://twincable.emp-access.de/api_gate.php?hardware=1&id={}'

while True:
	# Eingabe von der Tastatur erfassen
	user_input = input("Geben Sie Ihre ID ein (oder 'exit' zum Beenden): ")

	# Wenn der Benutzer 'exit' eingibt, beenden wir die Schleife
	if user_input.lower() == 'exit':
		print("Programm wird beendet...")
		break

	# Formatieren der URL mit der Benutzer-ID
	formatted_url = api_url.format(user_input)

	# Senden der GET-Anfrage
	try:
		response = requests.get(formatted_url)

		# Überprüfen, ob die Anfrage erfolgreich war
		if response.status_code == 200:
			print("Anfrage erfolgreich! Antwort:", response.text)
		else:
			print("Fehler beim Senden der Anfrage:", response.status_code, response.text)

	except requests.exceptions.RequestException as e:
		print("Ein Fehler ist aufgetreten:", str(e))
