<html lang="en"><head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">
body,td,div,p,a,input {font-family: arial, sans-serif;}
</style>
</head>
<body>
<font size=-1>
<p><b>Trigger:</b> {TRIGGER.NAME}<br>
<b>Trigger status: </b><b><span style="color:green">{TRIGGER.STATUS}</span></b><br>
<b>Trigger severity: </b>{TRIGGER.SEVERITY}<br>
<b>Trigger duration: </b>{EVENT.AGE} ({EVENT.DATE} {EVENT.TIME} 
&minus; {EVENT.RECOVERY.DATE} {EVENT.RECOVERY.TIME})<br>
</p>
<p><b>Host: </b>{HOST.NAME1} ({HOST.DNS1}, {HOST.IP1})<br>
<b>Host description: </b>{HOST.DESCRIPTION}</p>
<p><b>Trigger Description: </b>{TRIGGER.DESCRIPTION}</p>
<p><b>Item Description: </b>{ITEM.DESCRIPTION1}</p>
<p><b>Item values:</b><br>
Name: <i>{ITEM.NAME1}</i><br>
Key: <i>{ITEM.KEY1}</i><br>
Value: <i>{ITEM.VALUE1}</i><br></p>
<p>Some info about this server:</p>
<p><b>Uptime: </b><i>{{HOST.HOST}:system.uptime.last()}</i></p>
<p><b>CPU usage:</b><br>
Latest value: <i>{{HOST.HOST}:system.cpu.util[,,avg1].last()}</i><br>
MAX for 15 minutes: <i>{{HOST.HOST}:system.cpu.util[,,avg1].max(900)}</i><br>
MIN for 15 minutes: <i>{{HOST.HOST}:system.cpu.util[,,avg1].min(900)}</i></p>
<p><b>CPU load:</b><br>
Latest value: <i>{{HOST.HOST}:system.cpu.load[percpu,avg1].last()}</i><br>
MAX for 15 minutes: <i>{{HOST.HOST}:system.cpu.load[percpu,avg1].max(900)}</i><br>
MIN for 15 minutes: <i>{{HOST.HOST}:system.cpu.load[percpu,avg1].min(900)}</i></p>
<br>
<p>Original event ID: <i>{EVENT.ID}</i></p>
<br>
<p><i>Best Regards,</i></p><p>
<i><span style="font-size:8.0pt;color:#e7e6e6">May the Force be with you</span></i></p>
<p><b>*** This is an automatically generated email by Zabbix, please do not reply, but take attention ***</b></p>
</font>
</body>
</html>