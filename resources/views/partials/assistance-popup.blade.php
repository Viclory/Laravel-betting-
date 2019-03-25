<div class="assistance-popup hidden">
    <div class="header">
        <div class="col">
            <a href="" class="back-link">{{ __('common.back') }}</a>
        </div>
        <div class="col">
            <a href="" class="js-close-popup">{{ __('common.close_window') }}</a>
        </div>
    </div>
    <div class="main-box">
        <p class="h2">{{ __('common.how_can_we_help_you') }}?</p>
        <p>{{ __('common.assistance_popup_send_message_guide') }}</p>
        <p>{{ __('common.live_chat_open_time') }}</p>
        <div class="assistance-items">
            <div class="item" style="cursor:pointer"  onClick="chatButton.onClick();">
                <div class="icon">
                    <img src="{{ asset('img/chat-icon.png') }}" alt="">
                </div>
                <div class="text">
                    <p><a href="#!" id="invoke_chat">{{ __('common.online_chat') }}</a></p>
                    <p>{{ __('common.chat_with_support') }}</p>
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="{{ asset('img/mail-icon.png') }}" alt="">
                </div>
                <div class="text">
                    <p><a href="" data-child="message-box">{{ __('common.message_to_support') }}</a></p>
                    <p>{{ __('common.answer_during', ['hours' => 12]) }}</p>
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="{{ asset('img/interrogation-icon.png') }}" alt="">
                </div>
                <div class="text">
                    <p><a href="" data-child="faq-box">{{ __('common.faq') }}</a></p>
                    <p>{{ __('common.will_find_answer_here') }}</p>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="social-links">
                <a href="https://vk.com/" class="vkontakte" target="_blank" title="Vkontakte">vk</a>
                <a href="https://twitter.com/" class="twitter" target="_blank" title="Twitter"></a>
                <a href="https://facebook.com/" class="facebook" target="_blank" title="Facebook">f</a>
            </div>
            <p>{{ __('common.contact_us_by_email') }}:</p>
            <p><a href="mailto:{{ env('SUPPORT_EMAIL') }}">{{ env('SUPPORT_EMAIL') }}</a></p>
        </footer>
    </div>
    <div class="faq-box assistance-child">
        <p class="h2">{{ __('common.faq') }}</p>
        <p>{{ __('common.faq_sub') }}</p>
        <div class="accordion sub-appearance">
            <div class="item">
                <div class="title">
                    <p>1. {{ __('common.faq_1') }}</p>
                </div>
                <div class="text">
                    <ul>
                        <li>
                            <a href="">1.1. Зачем создавать аккаунт?</a>
                            <div class="dropdown">
                                <p>Создание аккаунта на <a href="/">LepreconCasino.com</a> открывает для нового игрока много возможностей.</p>
                                <ol>
                                    <li>Вы сможете насладиться любым из предлагаемых нами развлечений, будь то игры казино, спортивный тотализатор, покер или бинго.</li>
                                    <li>Регистрация учетной записи ни к чему не обязывает и не налагает на игрока никакой ответственности.</li>
                                    <li>Вы сможете играть в игры казино бесплатно и на реальные деньги, если пожелаете.</li>
                                </ol>
                            </div>
                        </li>
                        <li>
                            <a href="" class="active">1.2. Как создать LepreconCasino аккаунт?</a>
                            <div class="dropdown" style="display: block;">
                                <ol>
                                    <li>Открытие аккаунта происходит в три простых шага и занимает всего несколько минут, после чего можно сразу приступать к игре.</li>
                                    <li>Перейдите на главную страницу сайта и в правом верхнем углу нажмите на линк «Регистрация». Заполните несложную регистрационную форму, после чего кликните «Зарегистрироваться».</li>
                                    <li>Чтобы играть на реальные деньги, пополните счет в  любое удобное время.</li>
                                    <li>Регистрация завершена, теперь можно приступить к игре.</li>
                                </ol>
                            </div>
                        </li>
                        <li>
                            <a href="">1.3. Правила и условия создания аккаунта</a>
                            <div class="dropdown">
                                <p>Чтобы ничего не мешало игроку наслаждаться всеми возможностями нашего сайта, ему необходимо запомнить несколько обязательных для соблюдения правил при создании аккаунта.</p>
                                <p>Нельзя создавать более одного аккаунта.</p>
                                <p>Если система выявит пользователя с двумя или более аккаунтами, все средства, которые на них имеются (кроме бонусных), будут переведены на один по выбору системы, остальные будут удалены безвозвратно, а имеющиеся бонусы аннулированы.</p>
                                <p>Если вы обнаружили, что ваш аккаунт закрыт, обратитесь в  Службу поддержки. Вам помогут.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">1.4. Как войти в личный кабинет?</a>
                            <div class="dropdown">
                                <p>Войти в личный аккаунт на LepreconCasino очень просто. Для этого достаточно в верхнем правом углу домашней страницы ввести логин и пароль в соответствующие поля. После этого нажать на кнопку «Войти».</p>
                            </div>
                        </li>
                        <li>
                            <a href="">1.5. Что делать, если я забыл имя пользователя или пароль?</a>
                            <div class="dropdown">
                                <p>Не волнуйтесь. Если вы забыли имя пользователя или пароль, нажмите на ссылку «Забыли пароль?», которая расположена рядом с полями входа. Потребуется ввести адрес электронной почты, привязанный к вашей учетной записи. На данный Email мы отправим письмо с напоминанием этих данных, а также форму для изменения пароля.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">1.6. Я забыл все данные для входа в аккаунт</a>
                            <div class="dropdown">
                                <p>Если вы забыли данные для входа и вам нужна помощь, свяжитесь со Службой поддержки, отправив электронное письмо. Для того чтобы Служба поддержки смогла найти ваш аккаунт в системе, вам потребуется указать свое полное имя, дату рождения и другую информацию, подтверждающую вашу личность.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">1.7. Что делать, если мой аккаунт заблокирован?</a>
                            <div class="dropdown">
                                <p>Для начала мы рекомендуем вам удалить временные файлы Интернета и файлы cookie. После этого попробуйте снова войти в систему.</p>
                                <p>Если вы все еще не можете войти, возможно, причиной является ввод неправильного пароля. Ради безопасности вашей учетной записи она будет заблокирована после шести неудачных попыток входа. Для разблокировки аккаунта обратитесь в Службу поддержки. После этого вы сможете сменить пароль и войти в свою учетную запись.</p>
                                <p>Я удалил временные файлы Интернета и файлы cookie и  уверен, что пароль правильный, но я все равно не могу войти.</p>
                                <p>Обратитесь в Службу поддержки, они смогут установить причину.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">1.8. Где хранится информация о моем профиле?</a>
                            <div class="dropdown">
                                <p>Данные о профиле игрока всегда можно найти в разделе «Мой профиль», куда можно попасть, кликнув на соответствующую вкладку в левой части главной страницы.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">1.9. Какие данные нельзя изменить?</a>
                            <div class="dropdown">
                                <p>Изменению не подлежат следующие данные: ваше имя, имя пользователя и страна. Если вы допустили ошибку при вводе этой информации во время настройки своего игрового аккаунта, обратитесь за помощью в Службу поддержки. Вам потребуется копия удостоверения личности.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">1.10. Какие данные я могу изменить?</a>
                            <div class="dropdown">
                                <p>Информация, которая может быть изменена, включает ваш домашний адрес, номер телефона, дату рождения, электронную почту, на которую вы хотите получать уведомления LepreconCasino и электронные сообщения, а также пароль к аккаунту. Важно, чтобы вся эта информация была актуальной.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">1.11. Как изменить данные?</a>
                            <div class="dropdown">
                                <p>Вы можете изменить данные своего аккаунта, выбрав страницу «Изменить профиль» в разделе «Мой профиль». Сделайте необходимые изменения, введя новые данные в заданные поля. После этого введите текущий пароль и сохраните изменения, нажав на кнопку «Обновить информацию».</p>
                            </div>
                        </li>
                        <li>
                            <a href="">1.12. Как запросить приветственный бонус</a>
                            <div class="dropdown">
                                <p>Как получить мой приветственный бонус?</p>
                                <p>Как только вы зарегистрируете аккаунт и внесете свой первый депозит, бонус будет мгновенно начислен вам в размере 100%.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">1.13. Обслуживание клиентов</a>
                            <div class="dropdown">
                                <p>Обслуживание клиентов осуществляется по электронной почте support@lepreconcasino.com или через онлайн-чат. Служба поддержки ответит на ваш запрос в течение 24 часов. Запросы оскорбительного или неуважительного характера рассматриваться не будут.</p>
                                <p>Пожалуйста, не отправляйте несколько запросов по одной и той же теме до истечения времени ожидания (24 часа).</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="title">
                    <p>2. {{ __('common.faq_2') }}</p>
                </div>
                <div class="text">
                    <ul>
                        <li>
                            <a href="">2.1. Как внести депозит. Пошаговые инструкции.</a>
                            <div class="dropdown">
                                <p>Для того чтобы внести депозит в LepreconCasino, вам сначала необходимо зарегистрировать аккаунт. Если у вас нет аккаунта в LepreconCasino, вы можете зарегистрироваться на сайте <a href="/">LepreconCasino.com</a>. После того, как вы вошли в учетную запись, перейдите на вкладку – «Депозит».</p>
                                <p>Некоторые из предложенных вариантов оплаты зависят от страны, поэтому в разделе «Варианты оплаты» вы можете видеть только доступные для вашего региона. После выбора наиболее подходящего способа оплаты, введите по нему всю необходимую информацию. Средства будут зачислены на ваш счет в установленный период.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">2.2. Неудачные депозиты</a>
                            <div class="dropdown">
                                <p>Пополнение счета может быть неудачным по разным причинам. Это может быть связано с техническими проблемами с вашей или нашей стороны.</p>
                                <p>Тем не менее, если вы обнаружили, что деньги со счета или карты были сняты, но на ваш счет в LepreconCasino не поступили, или по не зависящим от вас причинам депозит не отображается в вашем личном кабинете, свяжитесь с нашей Службой поддержки и предоставьте им следующую информацию:</p>
                                <ul>
                                    <li>Полное имя/адрес электронной почты владельца аккаунта</li>
                                    <li>Время пополнения</li>
                                    <li>Дата</li>
                                    <li>Сумма пополнения</li>
                                    <li>Номер /ID транзакции/16-значный PIN-код/номер купона</li>
                                </ul>
                                <p>Чтобы ускорить процесс, по возможности вышлите скриншот квитанции на:</p>
                                <p><a href="mailto:support@lepreconcasino.com">support@lepreconcasino.com</a> на котором будут четко видны данные о пополнении.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">2.3. Невозможно пополнить счет из-за технических проблем</a>
                            <div class="dropdown">
                                <p>Важно, чтобы на вашем компьютере была установлена последняя версия JAVA и разрешены всплывающие окна, так как они необходимы для проведения некоторых вариантов оплаты.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">2.4. Неудачное пополнение с кредитной карты</a>
                            <div class="dropdown">
                                <p>Пополнение с карты может быть неудачным по разным причинам, и если вы получили отказ, свяжитесь с нашей Службой поддержки и сообщите об ошибке, тогда вам смогут помочь. Однако перед этим вы должны убедиться, что ваша карта может использоваться для интернет-транзакций, а для совершения депозита достаточно суммы на счете. Эту информацию можно уточнить в вашем банке.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">2.5. Пополнение через Skrill Moneybookers</a>
                            <div class="dropdown">
                                <p>Если у вас не получается пополнить счет через Skrill Moneybookers, прежде чем обращаться в нашу Службу поддержки, проверьте следующее:</p>
                                <p>Активен и не закрыт ли ваш аккаунт Skrill Moneybookers?</p>
                                <p>Достаточно ли средств на аккаунте для совершения депозита?</p>
                                <p>Убедитесь, что вы вносите сумму не меньше, чем минимально допустимый и не больше, чем максимально допустимый депозит для Skrill Moneybookers.</p>
                                <p>Использовался ли такой же аккаунт Skrill Moneybookers в другой учетной записи LepreconCasino? Вы можете использовать такой же аккаунт только в одной учетной записи LepreconCasino.</p>
                                <p>Были ли списаны средства с вашего аккаунта Skrill Moneybookers, если да, то какая сумма?</p>
                                <p>Какой ID транзакции для депозита в Skrill Moneybookers?</p>
                            </div>
                        </li>
                        <li>
                            <a href="">2.6. Пополнение через Neteller</a>
                            <div class="dropdown">
                                <p>Если вы не можете пополнить счет через Neteller, прежде чем обращаться в нашу Службу поддержки, проверьте следующее:</p>
                                <p>Активен и не закрыт ли ваш аккаунт Neteller?</p>
                                <p>Достаточно ли средств на аккаунте для совершения депозита?</p>
                                <p>Убедитесь, что ваш депозит не меньше, чем минимально допустимый, или не больше, чем максимально допустимый депозит для Neteller.</p>
                                <p>Использовался ли такой же аккаунт Neteller в другой учетной записи LepreconCasino? Вы можете использовать такой же аккаунт только в одной учетной записи LepreconCasino.</p>
                                <p>Были ли сняты деньги с вашего аккаунта Neteller, если да, то какая сумма?</p>
                                <p>Какой ID транзакции для депозита в Neteller?</p>
                            </div>
                        </li>
                        <li>
                            <a href="">2.7. Entropay неудачный депозит</a>
                            <div class="dropdown">
                                <p>Если у вас возникли затруднения с внесением депозита через систему Entropay, прежде чем обращаться в нашу Службу поддержки, проверьте следующее:</p>
                                <p>Достаточно ли средств на карте для совершения депозита?</p>
                                <p>Убедитесь, что сумма, которую вы собираетесь внести, не меньше, чем минимально допустимый, или не больше, чем максимально допустимый депозит для Entropay.</p>
                                <p>Использовалась ли такая же карта Entropay в другой учетной записи LepreconCasino? Вы можете использовать одну и ту же карту только в одной учетной записи LepreconCasino.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">2.8. Проблемы с пополнением счета через Paysafe</a>
                            <div class="dropdown">
                                <p>Если вы не можете пополнить счет через Paysafe, прежде чем обращаться в нашу Службу поддержки, проверьте следующее:</p>
                                <p>Проверьте правильность ввода 16-значного PIN-кода с вашей карты.</p>
                                <p>Достаточно ли средств на карте для совершения депозита?</p>
                                <p>Убедитесь, что сумма вашего пополнения не меньше, чем минимально допустимый, или не больше, чем максимально допустимый депозит для карты Paysafe.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="title">
                    <p>3. {{ __('common.faq_3') }}</p>
                </div>
                <div class="text">
                    <ul>
                        <li>
                            <a href="">3.1. Вывод средств</a>
                            <div class="dropdown">
                                <p>Для того чтобы вывести средства, перейдите в раздел «Счета».</p>
                                <p>В этом меню вы найдете раздел «Вывод средств». Если ваша личность еще не подтверждена, появится уведомление с приглашением на прохождение верификации. Если у вас есть действующие бонусы, вы также получите предложение использовать их перед тем, как продолжить вывод средств.</p>
                                <p>Чтобы вывести средства, выберите на странице предпочтительный способ вывода и укажите сумму.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">3.2. Инструкции по отмене вывода средств</a>
                            <div class="dropdown">
                                <p>Вы можете посмотреть статус вывода средств, перейдя в разделе «Мои счета» на вкладку «Ожидаемые выводы средств». Если запрос на вывод не отображается, значит, ваша заявка находится в обработке в отделе платежей. В этом разделе вы можете отменить запрос на вывод средств и вернуть деньги на свой аккаунт. Для этого используйте предоставленную ссылку. Деньги будут немедленно доступны к использованию в вашей учетной записи LepreconCasino.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">3.3. Процесс вывода средств</a>
                            <div class="dropdown">
                                <p>Вывод средств производится по понедельникам, вторникам, средам, четвергам и пятницам. После обработки запроса вы получите средства в течение 7 рабочих дней в зависимости от выбранного вами способа вывода.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="title">
                    <p>4. {{ __('common.faq_4') }}</p>
                </div>
                <div class="text">
                    <ul>
                        <li>
                            <a href="">4.1. Как мы защищаем документы, предоставленные вами?</a>
                            <div class="dropdown">
                                <p>Документы, которые вы предоставляете нам, хранятся на выделенном сервере, доступ к которому есть только у ответственных лиц нашего ресурса. На копиях кредитных карт центральные 6 цифр карты и CVC/код на обратной стороне карты скрыты. Все платежные операции выполняются в соответствии со стандартом PCI DSS, что является требованием Visa &amp;Mastercard. Чтобы узнать больше о стандарте PCI, посетите веб-сайт Совета по стандартам безопасности данных индустрии платежных карт (PCI Security Council).</p>
                                <p>Все загруженные документы проверяются антивирусной программой. Обработанные документы хранятся на сервере, доступ к которому можно получить только из нашего защищенного хранилища платежей. Безопасность гарантирована несколькими брандмауэрами, антивирусными программами и системами мониторинга.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">4.2. Электронные кошельки</a>
                            <div class="dropdown">
                                <p>Skrill – скриншот экрана вашего Skrill-профиля, на котором видно ваше имя и адрес электронной почты. После того, как вы вошли в свою учетную запись Skrill, можете найти это в разделе «Мой аккаунт»&gt; «Настройки»&gt; «Личная информация».</p>
                                <p>Neteller – скриншот/снимок экрана вашего Neteller-профиля, где видно ваше имя и ID.</p>
                                <p>Банковский перевод – документ выписки из вашего банка, на котором видны  ваше имя, номер банковского счета и логотип банка.</p>
                                <p>Обратите внимание! Если вы загружаете документы через мобильное устройство, учтите, что не все устройства и операционные системы поддерживают эту функцию в полной мере. В таком случае используйте десктопную версию.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">4.3. Зачем нам нужны ваши документы?</a>
                            <div class="dropdown">
                                <p>Предоставляя нам необходимые документы, вы защищаете свой аккаунт, и тем самым помогаете нам соблюдать все обязательные правила и нормативно-правовые акты. Зная  настоящего владельца аккаунта, мы можем предотвратить мошенничество и кражу учетной записи сторонними лицами.</p>
                                <p>Документы запрашиваются при первом выводе средств или после Х суммы депозитов. Вы можете загрузить ваши документы здесь -&gt; Идентификация.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">4.4. Что требуется?</a>
                            <div class="dropdown">
                                <p>Нам понадобятся от вас документы, подтверждающие вашу личность и адрес.</p>
                                <p>Чтобы соблюсти законодательство и защитить ваш аккаунт, нам нужны информация, подтверждающая вашу личность, место проживания, каким банком выдана кредитная карта, сканы лицевой и обратной сторон карты.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="title">
                    <p>5. {{ __('common.faq_5') }}</p>
                </div>
                <div class="text">
                    <ul>
                        <li>
                            <a href="">5.1. Игры тормозят. В чем дело?</a>
                            <div class="dropdown">
                                <p>Убедитесь, что у вас установлена последняя версия браузера (мы рекомендуем Google Chrome) и последняя версия Flash-плеера.</p>
                                <p>Убедитесь, что проблема не в вашем интернет-соединении (попробуйте проверить сетевой кабель роутера, если беспроводное соединение работает не так, как должно) и закройте любые фоновые программы, которые могут тормозить операционную систему или использовать часть траффика.</p>
                                <p>То же самое относится и к мобильным устройствам, требующим стабильного Wi-Fi-соединения.</p>
                                <p>Если проблема не устранена, обратитесь в нашу Службу поддержки.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">5.2. Что произойдет, если игра зависнет в середине раунда?</a>
                            <div class="dropdown">
                                <p>Если ваша игра зависла, то в следующий раз когда вы ее откроете, она продолжится с того места, на котором прервалась.</p>
                                <p>Если у вас нет возможности вернуться в игру, раунд будет завершен на сервере, даже если ваш компьютер завис, или интернет перестал работать. Как и в обычной ситуации, выигрыш будет выплачен на ваш аккаунт.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">5.3. Я не могу открыть игру. В чем дело?</a>
                            <div class="dropdown">
                                <p>Это может означать, что вы потеряли связь с сервером. Попробуйте выйти из аккаунта и снова зайти, повторите попытку.</p>
                                <p>Иногда для загрузки игры вам может понадобиться перезапустить браузер.</p>
                                <p>Если проблема не устранилась, обратитесь в нашу Службу поддержки.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">5.4. Как сделать скриншот?</a>
                            <div class="dropdown">
                                <p>Сделать скриншот – означает сфотографировать то, что в данный момент отображается на экране компьютера.</p>
                                <p>Изображение сохраняется в виде файла на вашем компьютере или мобильном устройстве. Его легко прикрепить к электронному письму и отправить нам.</p>
                                <p>5.4.1 Как сделать скриншот в Windows</p>
                                <p>Шаг 1: Убедитесь, что на экране отображается то, что вам нужно для скриншота.</p>
                                <p>Шаг 2: Нажмите на клавиатуре на клавишу «Print Screen (PrtScr)» (она обычно находится в правой части клавиатуры).</p>
                                <p>Шаг 3: Откройте на вашем компьютере программу «Paint» или «Word» и нажмите сочетание клавиш Ctrl + V (или выберите «Вставить» в меню «Правка»). Изображение будет вставлено (это изображение, которое компьютер сохранил после нажатия на клавишу «Print Screen (PrtSc)»).</p>
                                <p>Шаг 4: Сохраните файл на вашем компьютере. Мы рекомендуем сохранить файл на рабочем столе, чтобы вы могли легко его найти.</p>
                                <p>Шаг 5: Прикрепите файл к электронному письму и отправьте его нам.</p>
                                <p>5.4.2 Инструкция для Mac</p>
                                <p>Шаг 1: Убедитесь, что на экране отображается то, что вам нужно для скриншота.</p>
                                <p>Шаг 2: Нажмите Shift + CMD +4, затем нажмите пробел – появится камера. Щелкните мышью, чтобы сделать снимок текущего окна. Изображение сохранится на рабочем столе с текущим временем и датой.</p>
                                <p>Шаг 3: Прикрепите файл к электронному письму и отправьте его нам.</p>
                                <p>5.4.3 Инструкции для мобильных устройств</p>
                                <p>В зависимости от производителя телефона могут быть отличия. На iPhone просто нажмите и удерживайте кнопку «Sleep/Wake», затем нажмите кнопку «Home».</p>
                                <p>На Samsung одновременно нажмите и удерживайте кнопки «Home» и «Power button».</p>
                                <p>Как только скриншот будет сделан, он автоматически сохранится в галерее камеры.</p>
                                <p>Чтобы сделать скриншот на других устройствах Android или других операционных системах, прочтите FAQ вашего мобильного устройства.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">5.5. Что делать, если сайт LepreconCasino.com заблокирован?</a>
                            <div class="dropdown">
                                <p>Если вы не можете открыть сайт, и вам кажется, будто он заблокирован, просто следуйте инструкциям в статье:</p>
                                <p>VPN-сервисы</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="title">
                    <p>6. {{ __('common.faq_6') }}</p>
                </div>
                <div class="text">
                    <ul>
                        <li>
                            <a href="">6.1. Как закрыть свой аккаунт?</a>
                            <div class="dropdown">
                                <p>Если вы решили закрыть свой аккаунт на LepreconCasino, сначала вы должны обратиться в Службу поддержки через электронную почту, привязанную к учетной записи. Также можно обратиться в онлайн-чат поддержки. Сообщите техническому ассистенту, что вы хотите закрыть свой аккаунт. К сожалению, мы не выполняем запросы на закрытие аккаунта по телефону.</p>
                                <p>Для закрытия игрового аккаунта можно использовать следующие методы:</p>
                                <ol>
                                    <li>Чтобы закрыть аккаунт на временной основе, обратитесь в Службу поддержки и попросите временно деактивировать вашу учетную запись. Когда будете готовы ее разблокировать, снова обратитесь в Службу поддержки.</li>
                                    <li>Чтобы удалить личный аккаунт без возможности восстановления, обратитесь в Службу поддержки и попросите удалить вашу учетную запись перманентно. В этом случае вы уже не сможете восстановить свой аккаунт.</li>
                                    <li>Чтобы удалить аккаунт вследствие проблем с азартными играми, обратитесь в Службу поддержки и сообщите им об этой причине. В этом случае вы также не сможете восстановить свой аккаунт ни под каким предлогом. Он будет удален перманентно.</li>
                                </ol>
                            </div>
                        </li>
                        <li>
                            <a href="">6.2. Могу ли я заблокировать определенную игру в своем аккаунте, чтобы я не мог в нее играть?</a>
                            <div class="dropdown">
                                <p>К сожалению, LepreconCasino не предоставляет возможности выборочно блокировать игры из общего списка.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">6.3. Может ли кто-либо из моих аффилированных лиц  также иметь аккаунт LepreconCasino?</a>
                            <div class="dropdown">
                                <p>У игрока может быть только один аккаунт, но его родственники или близкие также могут создать учетную запись на LepreconCasino. Для этого, пожалуйста, обратитесь к нам.</p>
                            </div>
                        </li>
                        <li>
                            <a href="">6.4. Зачем мне отправлять личные документы для верификации моего аккаунта?</a>
                            <div class="dropdown">
                                <p>Для добросовестного осуществления законной деятельности в полном объеме, а также гарантий безопасности вашего аккаунта могут потребоваться некоторые документы, подтверждающие личность пользователя, особенно для вывода средств. В случае необходимости мы можем затребовать от игрока пройти дополнительную верификацию для вывода средств. Загрузить верификационные документы можно, войдя в учетную запись, в меню «Мой аккаунт» &gt; «Идентификация».</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="chat-box assistance-child">
        <form action="#" class="form">
            <div class="field required">
                <label class="field-name">Ваш адрес электронной почты</label>
                <div class="inp-box">
                    <input type="text" class="form-control" placeholder="Email">
                </div>
            </div>
            <p>Ваш запрос, связанный с: *</p>
            <div class="field">
                <div class="radio-item">
                    <input id="radio-inp" name="radio-inp" type="radio">
                    <label for="radio-inp">Бонусы и бесплатные спины</label>
                </div>
                <div class="radio-item">
                    <input id="radio-inp2" name="radio-inp" type="radio">
                    <label for="radio-inp2">Оплата</label>
                </div>
                <div class="radio-item">
                    <input id="radio-inp3" name="radio-inp" type="radio">
                    <label for="radio-inp3">Аккаунт</label>
                </div>
                <div class="radio-item">
                    <input id="radio-inp4" name="radio-inp" type="radio">
                    <label for="radio-inp4">Другое</label>
                </div>
            </div>
            <button type="button" class="btn full-width">начать чат</button>
        </form>
    </div>
    <div class="message-box assistance-child">
        <p class="h2">{{ __('common.message_support') }}</p>
        <p>{{ __('common.message_support_sub') }}</p>
        <form action="#" class="form">
            <div class="field required">
                <label class="field-name">{{ __('common.your_email_address') }}</label>
                <div class="inp-box">
                    <input type="text" id="supportEmail" name="supportEmail" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="field">
                <div class="inp-box">
                    <input type="text" id="supportSubject" name="supportSubject" class="form-control" placeholder="Message subject">
                </div>
            </div>
            <div class="field">
                <div class="inp-box">
                    <textarea class="form-control" id="supportMessage" name="supportMessage" rows="10" cols="10" placeholder="Message"></textarea>
                </div>
            </div>
            <button type="button" onclick="createTicket()" class="btn full-width">{{ __('common.send_message') }}</button>
        </form>
    </div>
</div>