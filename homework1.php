<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Homework</title>
		<script language="JavaScript">
			function factorial(n) //находит факториал необходимого числа
			{
				if (n <2) return 1;
				else return (n * factorial(n - 1));
			}
			function mass_of_facts(arr) //создает массив факториалов цифр от 0 до 9
			{
				for (var i = 0; i < 10; i++) { arr[i] = factorial(i); }
			}
			function facts_sum(n,arr) // высчитывает сумму факториал цифр в числе
			{
				var sum=0; var temp;
				for (var i = 0; i < n.length; i++) {temp = +n.charAt(i); sum+=arr[temp];}
				return sum;
			}
			function string(n,arr)
			{
			var str = n.charAt(0)+'!';
			for (var i = 1; i < n.length; i++)	{str +=' + '+n.charAt(i)+'!'}
			str+=' = '+n;
			return str;
			}
		</script>
	</head>
	<body>
		<script language="JavaScript">
		var arr = {};
		mass_of_facts(arr);
		document.write('Числа, равные сумме факториалов своих цифр:')
		for(var i=0; i<arr[9]*7;i++) 
									/* берется ограничение до 9!*8, т.к. в диапозоне от 10^6 до 10^7 
									 будет достигнуто такое число, сумма цифр факториалов которого будет
									 всегда меньше чем оно само. Например мах сумма факториалов числа 9 999 999
									 равная 2 540 160 будет меньше и, следовательно, не равна всем числам больше
									 2 540 160 */
		{ 
		var l = String(i);
		var s = facts_sum(l,arr);
		if(s==i) document.write('<br>'+string(l,arr));
		if (arr[9]*7<i) breack; //прекращение итерации при достижении условия описанного выше
		};
		</script>
	</body>
</html>