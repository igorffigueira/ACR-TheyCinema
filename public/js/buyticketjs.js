$(document).ready(()=>{
    var varseat = $('#seat1').val();
    var changeSeat = document.getElementById("seat1");
    if(varseat != 0){
        changeSeat.innerHTML = "<p>Reserved</p>";
    }
    var varseat = $('#seat2').val();
    var changeSeat = document.getElementById("seat2");
    if(varseat != 0){
        changeSeat.innerHTML = "<p>Reserved</p>";
    }
    var varseat = $('#seat3').val();
    var changeSeat = document.getElementById("seat3");
    if(varseat != 0){
        changeSeat.innerHTML = "<p>Reserved</p>";
    }
    var varseat = $('#seat4').val();
    var changeSeat = document.getElementById("seat4");
    if(varseat != 0){
        changeSeat.innerHTML = "<p>Reserved</p>";
    }
    var varseat = $('#seat5').val();
    var changeSeat = document.getElementById("seat5");
    if(varseat != 0){
        changeSeat.innerHTML = "<p>Reserved</p>";
    }
    var varseat = $('#seat6').val();
    var changeSeat = document.getElementById("seat6");
    if(varseat != 0){
        changeSeat.innerHTML = "<p>Reserved</p>";
    }
    var varseat = $('#seat7').val();
    var changeSeat = document.getElementById("seat7");
    if(varseat != 0){
        changeSeat.innerHTML = "<p>Reserved</p>";
    }
    var varseat = $('#seat8').val();
    var changeSeat = document.getElementById("seat8");
    if(varseat != 0){
        changeSeat.innerHTML = "<p>Reserved</p>";
    }
    var varseat = $('#seat9').val();
    var changeSeat = document.getElementById("seat9");
    if(varseat != 0){
        changeSeat.innerHTML = "<p>Reserved</p>";
    }

});
    function reserve1(id){
        var varseat1 = $('#seat1').val();

            if(varseat1 == 0){
                $.ajax({
                    url: '/buyticket',
                    data: {
                            dataPosition: "a1",
                            dataIdSala:    id
                    },
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    method: 'post'
                    }) .done(function(result){
                        window.location = '/payment';
                    });                 
                    }else{
                        alert("Lugar Ocupado");
                    }
            }

    function reserve2(id){
        var varseat2 = $('#seat2').val();

            if(varseat2 == 0){
                $.ajax({
                    url: '/buyticket',
                    data: {
                            dataPosition: "a2",
                            dataIdSala:    id
                    },
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    method: 'post'
                    }).done(function(result){
                        window.location = '/payment';
                    });                    
                    }else{
                        alert("Lugar Ocupado");
                    }
                }

    function reserve3(id){
        var varseat3 = $('#seat3').val();

            if(varseat3 == 0){
                $.ajax({
                    url: '/buyticket',
                    data: {
                            dataPosition: "a3",
                            dataIdSala:    id
                    },
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    method: 'post'
                    }).done(function(result){
                        window.location = '/payment';
                    });                      
                    }else{
                        alert("Lugar Ocupado");
                    }
                }
                
    function reserve4(id){
        var varseat4 = $('#seat4').val();

            if(varseat4 == 0){
                $.ajax({
                    url: '/buyticket',
                    data: {
                            dataPosition: "a4",
                            dataIdSala:    id
                    },
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    method: 'post'
                    }).done(function(result){
                        window.location = '/payment';
                    });                      
                    }else{
                        alert("Lugar Ocupado");
                    }
            }

    function reserve5(id){
        var varseat5 = $('#seat5').val();

            if(varseat5 == 0){
                $.ajax({
                    url: '/buyticket',
                    data: {
                            dataPosition: "a5",
                            dataIdSala:    id
                    },
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    method: 'post'
                    }).done(function(result){
                        window.location = '/payment';
                    });                      
                    }else{
                        alert("Lugar Ocupado");
                    }
                }

    function reserve6(id){
        var varseat6 = $('#seat6').val();

            if(varseat6 == 0){
                $.ajax({
                    url: '/buyticket',
                    data: {
                            dataPosition: "a6",
                            dataIdSala:    id
                    },
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    method: 'post'
                    }).done(function(result){
                        window.location = '/payment';
                    });                      
                    }else{
                        alert("Lugar Ocupado");
                    }
                }

    function reserve7(id){
        var varseat7 = $('#seat7').val();

            if(varseat7 == 0){
                $.ajax({
                    url: '/buyticket',
                    data: {
                            dataPosition: "a7",
                            dataIdSala:   id
                    },
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    method: 'post'
                    }).done(function(result){
                        window.location = '/payment';
                    });                      
                    }else{
                        alert("Lugar Ocupado");
                    }
                }

    function reserve8(id){
        var varseat8 = $('#seat8').val();

            if(varseat8 == 0){
                $.ajax({
                    url: '/buyticket',
                    data: {
                            dataPosition: "a8",
                            dataIdSala:    id
                    },
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    method: 'post'
                    }).done(function(result){
                        window.location = '/payment';
                    });                      
                    }else{
                        alert("Lugar Ocupado");
                    }
                }

    function reserve9(id){
        var varseat9 = $('#seat9').val();

            if(varseat9 == 0){
                $.ajax({
                    url: '/buyticket',
                    data: {
                            dataPosition: "a9",
                            dataIdSala:    id
                    },
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    method: 'post'
                    }).done(function(result){
                        window.location = '/payment';
                    });                      
                    }else{
                        alert("Lugar Ocupado");
                    }
                }