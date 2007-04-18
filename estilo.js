<!--
 function ValidateCalls()
	{var CallsValue;
	with (document.Valida)
	{CallsValue=CallsNumber();
	if ((CallsValue<1) || (CallsValue>10000))
		{alert("Número de ligações deve ser entre 1 e 10000");
		Ligacoes.value=""}
}}
 function ValidateDuration()
	{var DurationValue;
	with (document.Valida)
	{DurationValue=DurationNumber();
	if ((DurationValue<10) || (DurationValue>1800))
		{alert("Duração da Ligação deve ser entre 10 e 1800 segundos");
		Duracao.value=""}
}}
 function ValidateDelay()
	{var DelayValue;
	with (document.Valida)
	{DelayValue=DelayNumber();
	if ((DelayValue<1) || (DelayValue>600))
		{alert("Tempo Médio deve ser entre 1 e 600 segundos");
		Tempo.value=""}
}}
 function Calculando()
    {var agents,traffic,DurationValue,DelayValue;
	with (document.Valida)
	{if ((Ligacoes.value=="") || (Duracao.value=="") || (Tempo.value==""))
		{alert("As três caixas devem ser preenchidas")}
	else
	{DurationValue=DurationNumber();
	CallsValue=CallsNumber();
	DelayValue=DelayNumber();
	agents=Math.round((DurationValue*CallsValue/3600)-0.5)+1;
	traffic=CallsValue*DurationNumber()/3600;
	while (ECDelayAll(traffic,agents,DurationValue)>DelayValue) {agents++}
	alert("O número de atendentes necessários durante esta hora é "  + agents + ".")
	}
}}
 function CallsNumber()
	{return parseInt(document.Valida.Ligacoes.value)
}
 function DurationNumber()
	{return parseInt(document.Valida.Duracao.value)
}
 function DelayNumber()
	{return parseInt(document.Valida.Tempo.value)
}
 function EB(traffic,plines)
  {var PBR,index;
  if (traffic>0) 
    {PBR=(1+traffic)/traffic;
     for (index=2;index!=plines+1;index++)
      {PBR=index/traffic*PBR+1;
       if (PBR>10000) {return 0;}}
     return 1/PBR;}
  else {return 0;}
}
 function EC(traffic,plines)
  {var EBResult,probability;
	EBResult=EB(traffic,plines);
	probability=EBResult/(1-(traffic/plines)*(1-EBResult));
	if (probability>1) {return 1} else {return probability};
}
 function ECDelayAll(traffic,plines,HoldTime)
 {return EC(traffic,plines)*HoldTime/(plines-traffic);
}

