# W C

## EXP 6

import Card from './components/card';
function App() {
 return (
 <div className="App">
 <div className='cards'>
 <Card
 name="Cristiano Ronaldo"
 img="https://tse4.mm.bing.net/th?id=OIP.PgiawtaIidxaUARoWZmegHaEK&pid=Api&P=0"
 country="Portugal"
 club="Manchester United"
 pos="ST"
 /> 
 <Card
 name="Erling Haaland"
 img="https://tse3.mm.bing.net/th?id=OIP.-
8aZYyDJpOv8qzFs0CM4QgHaD4&pid=Api&P=0"
 country="Norway"
 club="Manchester City"
 pos="ST"
 />
 <Card
 name="Mohammad Salah"
 
img="https://tse1.mm.bing.net/th?id=OIP.txPHKNxDsd3SIrtUI0hCBwHaEK&pid=Api&P=0
"
 country="Egypt"
 club="Liverpool"
 pos="RWF"
 />
 </div>
 
 </div>
 );
}
export default App;


## Exp 9

steps
Steps:
1. Download packet tracer/GNS3.
2. Open packet tracer/ Guest Login/Create a new file
3. Drag 3 PC and 1 laptop. Choose switch and drag it.
4. Interconnect my devices with switch.
5. Configure my PC, Laptop Ip setting. Two ways to config network
a. config devices using commands (at switches and routers)
b. config in the end devices itself.
6. Assign Ip Address: 10.0.0.10 and mask 255.0.0.0 (PC 0) to 10.0.0.13 (Laptop)
7. To test the network, we use end devices (Pc/ laptop)
command prompt test the network using ping utility
8. go to PC 0--->desktop--->command prompt and type the command
>ping 10.0.0.13(reply)
9. Created another LAN with one switch and two
PC’s Configure PC3--->192.168.0.10 and PC 4---
>192.168.0.11
10. Drag router. Config router
a. connect router with switches (2 switches)
b. Configure router for both the interface
Assign left side network-->10.0.0.1 (g0/0/0/0) and right side network---
>192.168.0.1 (g/0/0/1)
11. Switch both the port on of the Router.
12. You can test VLAN using ping utility.
13. Go to PC 4, Open command prompt and type command
>ping 10.0.0.11 (reply)

video link 
https://www.youtube.com/watch?v=bQMzd7vdn40
