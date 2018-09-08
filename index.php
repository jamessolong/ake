<html>
    <head>
        <title>Calculator</title>
    </head>

    <body>
        <input type="text" id="fistnumber" placeholder="put fistnumber">
        <input type="text" id="secondnumber" placeholder="put secondnumber">

        <button id="sumBotton" onclick="getSum()">+</button>
        <button id="sumBotton1" onclick="getSum3()">-</button>
        <button id="sumBotton1" onclick="getSum1()">*</button>
        <button id="sumBotton1" onclick="getSum2()">/</button>

        <div id="output"></div>
        <script>
        var fistnumber = document.getElementById("fistnumber");
        var secondnumber = document.getElementById("secondnumber");
        var output = document.getElementById("output");
    

        function getSum() {
            let sum = parseInt(fistnumber.value) + parseInt(secondnumber.value);
            showResult(sum);
        }
        function getSum3() {
            let sum3 = parseInt(fistnumber.value) - parseInt(secondnumber.value);
            showResult(sum3);
        }
        function getSum1() {
            let sum1 = parseInt(fistnumber.value) * parseInt(secondnumber.value);
            showResult(sum1);
        }
        function getSum2() {
            let sum2 = parseInt(fistnumber.value) / parseInt(secondnumber.value);
            showResult(sum2);
        }

        

        function showResult(result) {
            output.innerHTML = "answer: " + result;
        }
    

       
        </script>
    </body>
</html>