<div wire:ignore.self class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            @if($selectedContact)
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="confirm-table">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="conform-table__input">
                                <input class="name__input" type="text" name="last_name" value="{{ $selectedContact->last_name }}" readonly>
                                <input class="name__input" type="text" name="first_name" value="{{ $selectedContact->first_name }}" readonly>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="conform-table__input">
                                <div class="gender_label">{{ $gender_label }}</div>
                                <input type="hidden" name="gender" value="{{ $selectedContact->gender }}">
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="conform-table__input">
                                <input type="text" name="email" value="{{ $selectedContact->email }}" readonly>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="conform-table__input">
                                <input type="text" name="tel" value="{{ $selectedContact->tel }}" readonly>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="conform-table__input">
                                <input type="text" name="address" value="{{ $selectedContact->address }}" readonly>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="conform-table__input">
                                <input type="text" name="building" value="{{ $selectedContact->building }}" readonly>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="conform-table__input">
                                <div class="category_name">{{ $selectedContact->category->content }}</div>
                                <input type="hidden" name="category_id" value="{{ $selectedContact->category_id }}">
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="conform-table__input">
                                <input type="text" name="detail" value="{{ $selectedContact->detail }}" readonly>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button wire:click="deleteContact({{ $selectedContact->id }})" class="btn btn-danger">削除</button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('open-modal', () => {
        $('#detailModal').modal('show');
    });
    window.addEventListener('modal-close', () => {
        $('#detailModal').modal('hide');
    });
</script>