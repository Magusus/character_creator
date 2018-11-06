$(document).ready(function(){
    var loadStats = function() {
        $.ajax({
            url: "getStats",
            method: "POST",
            data: {
                _token: $('meta[name=csrf-token]').attr("content"),
                race: $('#race').val(),
                profession: $('#profession').val(),
                level: $('#level').val(),
            },
            success: function(data) {
                $('#experience_points').val("0/"+data['exp']);
                
                $('#strength').val(data['strength']);
                $('#agility').val(data['agility']);
                $('#resisntace').val(data['resistance']);
                $('#mindfullness').val(data['mindfullness']);
                
                $('#intelligence').val(data['intelligence']);
                $('#widsom').val(data['wisdom']);
                $('#intuition').val(data['intuition']);
                $('#charisma').val(data['charisma']);
            }
        });
    };
    
    loadStats();
    $('#race, #profession, #level').change(function() {
        loadStats();
    });
});