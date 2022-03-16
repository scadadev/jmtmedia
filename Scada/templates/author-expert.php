<?php

if( empty( $args['expert'] ) ) return;

$expert = $args['expert'];

if( isset($expert['is_expert']) && $expert['is_expert'] === true && (!empty($expert['type_1']) || !empty($expert['type_2']) || !empty($expert['type_3'])) ) : ?>
    <div class="author-expert">
        <div class="author-expert__wrap">
            <?php if( !empty($expert['type_1']) ) : ?>
                <div class="author-expert__item">
                    <svg width="16" height="19" viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.72266 11.957C2.03906 11.6406 2.60156 11.6406 2.91797 11.957C5.34375 14.3828 9.24609 14.3828 11.6719 11.957C14.0977 9.53125 14.0977 5.62891 11.6719 3.20312C11.3555 2.88672 11.3555 2.32422 11.6719 2.00781L12.9023 0.8125C13.2188 0.460938 13.7461 0.460938 14.0625 0.8125C14.4141 1.12891 14.4141 1.65625 14.0625 1.97266L13.4297 2.64062C15.9258 5.73438 15.75 10.2695 12.8672 13.1523C11.5312 14.4531 9.87891 15.2266 8.15625 15.4023V16.5625H11.5312C11.9883 16.5625 12.375 16.9492 12.375 17.4062C12.375 17.8984 11.9883 18.25 11.5312 18.25H3.05859C2.60156 18.25 2.21484 17.8984 2.21484 17.4062C2.21484 16.9492 2.60156 16.5625 3.05859 16.5625H6.43359V15.4023C4.99219 15.2617 3.55078 14.6992 2.35547 13.7148L1.6875 14.3477C1.37109 14.6992 0.84375 14.6992 0.527344 14.3477C0.175781 14.0312 0.175781 13.5039 0.527344 13.1523L1.72266 11.957ZM2.25 7.5625C2.25 4.78516 4.5 2.5 7.3125 2.5C10.0898 2.5 12.375 4.78516 12.375 7.5625C12.375 10.375 10.0898 12.625 7.3125 12.625C4.5 12.625 2.25 10.375 2.25 7.5625Z" />
                    </svg>
                    <?php echo $expert['type_1']; ?>
                </div>
            <?php endif; ?>
            <?php if( !empty($expert['type_2']) ) : ?>
                <div class="author-expert__item">
                    <svg width="22" height="19" viewBox="0 0 22 19" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.1094 3.16797C21.0039 2.78125 20.6523 2.5 20.2656 2.5H16.7148C16.75 2.07812 16.75 1.69141 16.7148 1.33984C16.7148 0.742188 16.2227 0.25 15.5898 0.25H6.625C5.99219 0.25 5.5 0.742188 5.5 1.33984C5.46484 1.69141 5.46484 2.07812 5.5 2.5H1.94922C1.5625 2.5 1.21094 2.78125 1.10547 3.16797C1.10547 3.27344 0.4375 6.15625 2.30078 8.89844C3.60156 10.8672 5.81641 12.2383 8.875 13.0469C9.54297 13.2227 9.96484 13.8203 9.96484 14.4883C10 15.332 9.29688 16 8.45312 16H8.3125C7.36328 16 6.625 16.7734 6.625 17.6875C6.625 18.0039 6.87109 18.25 7.15234 18.25H14.9922C15.3086 18.25 15.5195 18.0039 15.5195 17.6875C15.5195 16.7734 14.7461 16 13.832 16H13.6562C12.8125 16 12.1445 15.332 12.1445 14.4883C12.1445 13.8203 12.6016 13.2227 13.2344 13.0469C16.293 12.2383 18.5078 10.8672 19.8438 8.89844C21.7773 6.15625 21.1094 3.27344 21.1094 3.16797ZM3.70703 7.98438C2.72266 6.54297 2.65234 5.03125 2.6875 4.1875H5.5C5.71094 6.29688 6.23828 8.82812 7.53906 10.8672C5.81641 10.1641 4.51562 9.21484 3.70703 7.98438ZM18.5078 7.98438C17.6992 9.21484 16.3984 10.1641 14.6758 10.8672C15.9766 8.82812 16.5039 6.29688 16.7148 4.1875H19.5273C19.5625 5.03125 19.4922 6.54297 18.5078 7.98438Z"/>
                    </svg>
                    <?php echo $expert['type_2']; ?>
                </div>
            <?php endif; ?>
            <?php if( !empty($expert['type_3']) ) : ?>
                <div class="author-expert__item">
                    <svg width="18" height="19" viewBox="0 0 18 19" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.22266 8.30078L7.27734 11.5H10.6875L11.7422 8.30078L9 6.33203L6.22266 8.30078ZM8.96484 0.25C4.00781 0.25 0 4.29297 0 9.25C0 14.2422 4.00781 18.25 9 18.25C13.957 18.25 17.9648 14.2422 17.9648 9.28516C17.9648 4.36328 13.957 0.25 8.96484 0.25ZM14.625 12.9414L11.6367 12.9062L10.7578 15.7891C10.1953 15.9297 9.59766 16 9 16C8.36719 16 7.76953 15.9297 7.20703 15.7891L6.32812 12.9062L3.33984 12.9414C2.70703 11.9922 2.32031 10.832 2.25 9.60156L4.71094 7.87891L3.72656 5.03125C4.46484 4.11719 5.44922 3.37891 6.57422 2.95703L9 4.75L11.3906 2.95703C12.5156 3.41406 13.5 4.11719 14.2383 5.03125L13.2539 7.87891L15.7148 9.60156C15.6445 10.832 15.2578 11.9922 14.625 12.9414Z"/>
                    </svg>
                    <?php echo $expert['type_3']; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
