<script>
    document.addEventListener('DOMContentLoaded', function() {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        @if(session("success"))
        Toast.fire({
            icon: "success",
            title: "{{ session("success") }}"
        });
        @endif

        @if(session("error"))
        Toast.fire({
            icon: "error",
            title: "{{ session("error") }}"
        });
        @endif
    });
</script>
