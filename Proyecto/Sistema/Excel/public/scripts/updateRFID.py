import MySQLdb
import serial
import time
import sys
db = MySQLdb.connect(host="localhost", user="root",passwd="", db="rfid2")
cursor = db.cursor()
comilla = "'"
#rfid = ''

#arduino = serial.Serial('/dev/ttyUSB0', 9600)
arduino = serial.Serial('COM4', 9600)
print("Starting!")
#eje= int(raw_input())
terminal = sys.argv
eje = int(terminal[1])
print eje
#7
#DESDE TERMINAL
#PARA RASPBIAN
#sudo python updateRFID.py 14040114

#para terminal windows
#14040115 | python .\updateRFID.py
def actualizar(n_control): #,rf_nuevo
    num_control = str(n_control)
    rfid_nuevo = rfid() #"CCB57907"
    upd = "UPDATE `usuarios` SET `rfid` ="
    upd1 = " '"+rfid_nuevo+"' "
    upd2 = "WHERE `usuarios`.`no_control` =" +num_control
    upd_chido = upd+upd1+upd2
    cursor.execute(upd_chido)
    print "Chido"
    arduino.write('U')
    return db.commit()

def rfid():
    rfid = ''
    while True:
        dato = arduino.read() #Recibe un dato de  Arduino
        if len(rfid) == 8:
            print rfid
            return rfid
            rfid = ''
            dato = ''
                
        rfid = rfid + dato.strip()
        rfid.strip('\n')
    
    arduino.close() #Finalizamos la comunicacion


    
actualizar(eje)#,rf_n


