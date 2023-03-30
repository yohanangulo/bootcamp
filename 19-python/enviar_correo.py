import smtplib
from email.message import EmailMessage

email_subject = 'correo enviado con python'
sender_email_address = 'anguloyohan98@gmail.com'
receiver_email_address = 'anguloyohan98@gmail.com'

email_smtp = 'smtp.gmail.com'
email_password = 'jferlskchkutictr' # no es la contrasena habitual, sino es una generada por google


# crear un mensaje
mensaje = EmailMessage()

#create email headers
mensaje['Subject'] = email_subject
mensaje['From'] = sender_email_address
mensaje['To'] = receiver_email_address

# establecer un cuerpo para el email

mensaje.set_content('Hola desde python')

# set smtp server and port
server = smtplib.SMTP(email_smtp, 587)

# Identify this client to the SMTP server
server.ehlo()

# Secure the SMTP connection
server.starttls()

# Login to the email account
server.login(sender_email_address, email_password)

# send email
server.send_message(mensaje)

# close connection to server
server.quit()