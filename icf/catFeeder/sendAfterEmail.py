import smtplib
from email.MIMEMultipart import MIMEMultipart
from email.MIMEText import MIMEText
from email.MIMEBase import MIMEBase
from email import encoders

fromaddr = "yourName@yourServer.com"
toaddr = "yourReciepient@server.com"
msg = MIMEMultipart()
msg['From'] = fromaddr
msg['To'] = toaddr
msg['Subject'] = "After Feed"
body = "After Feeding"
msg.attach(MIMEText(body, 'plain'))
filename = "afterImage.jpg"
attachment = open("/home/icf/afterImage.jpg", "rb")
part = MIMEBase('application', 'octet-stream')
part.set_payload((attachment).read())
encoders.encode_base64(part)
part.add_header('Content-Disposition', "attachment; filename= %s" % filename)
msg.attach(part)
server = smtplib.SMTP('smtp.gmail.com', 587)
server.starttls()
server.login("yourUserName", "yourPassword")
text = msg.as_string()
server.sendmail(fromaddr, toaddr, text)
server.quit()
