<script>
    function func(test){
        alert(test(2,3));
    }
    func(sum);
    func(mult);

    function sum(a, b){
        return a+b;
    }
    function mult(a, b){
        return a*b;
    }

</script>