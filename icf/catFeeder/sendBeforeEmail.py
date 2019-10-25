import smtplib
from email.MIMEMultipart import MIMEMultipart
from email.MIMEText import MIMEText
from email.MIMEBase import MIMEBase
from email import encoders

fromaddr = "name@provider.com"
toaddr = "reciepient@provider.com"
msg = MIMEMultipart()
msg['From'] = fromaddr
msg['To'] = toaddr
msg['Subject'] = "Before Feed"
body = "Before Feeding"
msg.attach(MIMEText(body, 'plain'))
filename = "beforeImage.jpg"
attachment = open("/home/icf/beforeImage.jpg", "rb")
part = MIMEBase('application', 'octet-stream')
part.set_payload((attachment).read())
encoders.encode_base64(part)
part.add_header('Content-Disposition', "attachment; filename= %s" % filename)
msg.attach(part)
server = smtplib.SMTP('smtp.gmail.com', 587)
server.starttls()
server.login("userName", "password")
text = msg.as_string()
server.sendmail(fromaddr, toaddr, text)
server.quit()
