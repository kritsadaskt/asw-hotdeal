<dialog id="loginModal" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg mb-4">กรอก Email ของคุณ</h3>
        <div class="input-group flex justify-between gap-2">
            <input id="emailInput" type="text" placeholder="example@email.com" class="input flex-1" />
            <button onclick="submitMail()" class="btn btn-primary">รับรหัส OTP</button>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>