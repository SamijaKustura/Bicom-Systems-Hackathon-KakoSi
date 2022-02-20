class Trener {

    static init() {
        $("#trener").validate({
            submitHandler: function (form, event) {
                event.preventDefault();
                var data = Utils.jsonize_form($(form));
                Trener.add(data);
            }
        });
    }


    static getAll() {
        $("#customers").DataTable({
            processing: true,
            serverSide: true,
            bDestroy: true,
            responsive: true,
            searching: false, 
            paging: false, 
            info: false,
            language: {
                "zeroRecords": "Nothing found - sorry",
            },
            ajax: {
                url: "api/fitnes/get",
                type: "GET",
                dataSrc: function (resp) {
                    console.log(resp);
                    return resp;
                },
            },
            columns: [{
                    "data": "id"
                },
                {
                    "data": "address"
                },
                {
                    "data": "visina"
                },
                {
                    "data": "tezina"
                },
                {
                    "data": "trening"
                },
                {   "data": function ( data, type, row, meta ) {
                    return '<td><label class="container"><input type="checkbox" checked="checked"> <span class="checkmark"></span> </label></td> </tr>';
                }
                },
                {   "data": function ( data, type, row, meta ) {
                    return '<td><button onclick="Trener.modal()" id="myBtn">Pošalji Poruku</button></td> </tr>';
                }
                }
            ]
        });
    }

    
    static modal(){
        // Get the modal
    var modal = document.getElementById("myModal");
    var body = document.getElementById("body");

    modal.style.display = "block";
    body.style.opacity = "0.1";

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
            body.style.opacity = "1";
        }
        
    }
    }

    static add(sesija) {
        Utils.post("api/fitnes/send", sesija, function (data) {
            toastr.success("Poruka poslana");            
             $("#trener").trigger("reset");
        });
    }
}