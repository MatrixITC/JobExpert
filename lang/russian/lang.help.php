<?php
/********************************************************
	JobExpert v1.0
	powered by Script Developers Group (SD-Group)
	email: info@sd-group.org.ua
	url: http://sd-group.org.ua/
	Copyright 2010-2015 (c) SD-Group
	All rights reserved
=========================================================
	Русский язык - Хелп
********************************************************/
/**
 * @package
 * @todo
 */

(!defined('SDG')) ? die ('Triple protection!') : null;

define('HELP_USER', '<p>В поле необходимо указать ID искомого пользователя.</p><p>ID должен состоять только из цифр.</p><p>Поиск производится по базе данных и все.</p>');

define('HELP_USER_PHONE', '<p>Укажите свой контактный номер телефона.</p><p>Этот номер будет автоматически подставляться в добавляемые Вами объявления.</p><p>Указывайте номер так, чтобы он был понятен пользователям, нашедшим Ваше объявление.</p><p style="color: red;">+44-20-7330-7500</p>');

define('HELP_USER_FIRST_NAME', '<p>Укажите свое имя.</p><p>Имя будет автоматически подставляться в добавляемые Вами объявления.</p>');

define('HELP_USER_LAST_NAME', '<p>Укажите свою фамилию.</p><p>Фамилия будет автоматически подставляться в добавляемые Вами объявления.</p>');

/***** ФОРМА СМЕНЫ ЛИЧНЫХ ДАННЫХ ПОЛЬЗОВАТЕЛЯ *****/
define('HELP_USER_ALIAS', '<p>Укажите свой псевдоним.</p><p>Псевдоним - это по сути Ваше имя в Системе.</p><p>При добавлении новости или статьи (если вы обладаете соответствующими правами), псевдоним будет проставляться в поле <b>автор</b>. Во всех добавляемых комментариях также будет отображаться Ваш псевдоним.</p><p>Псевдоним <strong>уникальное</strong> и <strong>обязательное</strong> для заполнения поле.</p>');

define('HELP_USER_GENDER', '<p>Укажите свой пол.</p><p>Поле не обязательно для заполнения, но если вы укажете пол, то при добавлении объявлений Ваш пол будет определяться автоматически.</p>');

define('HELP_USER_BIRTHDAY', '<p>Укажите дату своего рождения.</p><p>Поле не обязательно для заполнения, но если вы укажете дату, то при добавлении объявлений Ваш возраст будет определяться автоматически.</p>');

define('HELP_USER_COMPANY_NAME', '<p>Укажите представляемой Вами компании.</p>');

define('HELP_USER_COMPANY_DISCRIPTION', '<p>Укажите описание деятельности компании.</p><p>Также в поле Вы можете указать любую важную информацию о компании.</p>');

define('HELP_USER_COMPANY_LOGO', '<p>В поле укажите путь к файлу логотипа компании.</p><p>Логотип должен быть изображением в формате: GIF, JPG или PNG.</p>');

define('HELP_USER_HIDE_ADDITIONAL_COMPANY_DATA', '<p>Включение данной настройки позволяет скрыть дополнительные данные (имя, фамилию и телефон) компании.</p><p>При этом, в вакансиях компании эти данные будут доступны как и раньше.</p>');

/***** ФОРМА ЛИЧНЫХ ДАННЫХ ПОЛЬЗОВАТЕЛЯ *****/
define('HELP_USER_PRE_IP', '<p><b>Предыдущий IP</b> - IP-адрес, с которого был осуществлен предыдущий вход в личный кабинет.</p><p><b>Текущий IP</b> - Ваш текущий IP-адрес.</p>');

/***** ФОРМЫ НОВОСТЕЙ  *****/
define('HELP_USER_NEWS_PUBLICATION', '<p>В полях укажите дату и время публикации новости.</p><p>Если дата публикации больше текущей даты, то новость будет опубликована в установленное время.</p><p><b>Внимание!</b> Состояние новости определяется настройками, которые задает администратор. Если в настройках включена модерация новостей, то новость будет опубликована (с учетом даты публикации) только после того, как пройдет модерацию.</p>');

/***** ФОРМЫ АНКЕТ *****/
define('HELP_ANNOUNCE_INPUT_PHONE', 'В поле ввода телефонного номера можно использовать следующие символы: &quot;<b>+</b>&quot;, &quot;<b>-</b>&quot;, &quot;<b>(</b>&quot;, &quot;<b>)</b>&quot; и цифры от <b>0</b> до <b>9</b><br><br><b>Например:</b> +38(067)456-78-09.<br><br>В примечании Вы можете предоставить дополнительную информацию относительно указанного телефона, например, обозначить, что данный телефонный номер является приоритетным или что звонки можно совершать только с 9:00 до 18:00.');

define('HELP_ANNOUNCE_TEXTAREA_COMPANY_DISCRIPTION', 'Общие сведения о том, чем занимается компания.<br><br><b>Например:</b> Строительство объектов жилищного и административного значения; Разработка программного обеспечения.');

define('HELP_ANNOUNCE_TEXTAREA_REQUIREMENTS', 'Используйте это поле для того, чтобы указать дополнительные требования или пожелания к соискателю.<br><br><b>Например:</b> успешный опыт активных продаж, наличие автомобиля, ответственность, инициативность, коммуникабельность.');

define('HELP_ANNOUNCE_TEXTAREA_DUTESWORK', '<b>Выделите ключевые функции и обязанности вакантной должности</b><br><br>Опишите их коротко и ясно, записав каждую отдельно.');

define('HELP_ANNOUNCE_TEXTAREA_CONDITIONS', '<b>В этом поле укажите условия работы.</b><br><br><b>Такие как:</b><br>- сведения о компании;<br>- расположение места работы;<br>- размер заработной платы, премии, бонусов;<br>- наличие и содержание соцпакета и т.д.');

define('HELP_ANNOUNCE_TEXTAREA_EXT_INFO', 'Используйте это поле для того, чтобы указать дополнительную информацию о размещаемой вакансии.<br><br>Информацию, которую считаете важной и на которую также хотели бы обратить внимание соискателя.');

define('HELP_ANNOUNCE_RADIOBOX_USER_TYPE', 'В этом поле необходимо указать тип компании размещающей вакансию.<br><br><b>&quot;Прямой работодатель&quot;</b> - если вы ищите сотрудника напрямую для своей компании.<br><br><b>&quot;Кадровое агентство&quot;</b> - если вы оказываете рекрутинговые услуги по поручению компаний-работодателей.');

define('HELP_ANNOUNCE_RADIOBOX_VISIBILITY', '<b>Видно всем.</b> Выбирая этот вариант, Вы сообщаете, что хотите, чтобы <b>все</b> (как зарегистрированные так и не зарегистрированные на данном сайте пользователи) смогли находить и просматривать Ваше резюме.<br><br><b>Видно всем (скрыть контакты).</b> Если Вы хотите искать работу, но не хотите раскрывать свои контакты (эл. почту, Ф.И.О., адрес, телефон), выберите этот вариант. В результате при просмотре пользователями (как зарегистрированными так и не зарегистрированными на данном сайте) Вашего резюме Ваши контактные данные будут скрыты.</b><br><br><b>Видно пользователям.</b> Выбирая этот вариант, Вы сообщаете, что хотите, чтобы только зарегистрированные на данном сайте работодатели смогли находить и просматривать Ваше резюме. Поскольку работодатели, как правило, ищут резюме, а не публикуют вакансии, мы рекомендуем выбирать этот вариант, если у Вас нет особых причин не делать этого.<br><br><b>Видно пользователям (скрыть контакты).</b> Этот вариант аналогичен варианту <b>Видно всем (скрыть контакты)</b> с той лишь разницей, что Ваше резюме (со скрытыми контактными данными) смогут находить и просматривать только зарегистрированные на данном сайте работодатели.<br><br><b>Скрыть от всех.</b>  Если выбрать этот пункт, резюме будет скрыто, и его нельзя будет найти и просмотреть другим пользователям. При этом, в случае необходимости, Вы сможете отправлять это резюме по электронной почте.<br><br>Статус «Скрыть от всех» удобно использовать:<ul><li>вместо удаления резюме, когда Вы не ищете работу (если резюме Вам опять понадобится, не нужно будет создавать его заново, можно будет лишь изменить статус);</li><li>когда ищете работу только в активном режиме (отправляя свое резюме на понравившиеся вакансии, но не хотите, чтобы работодатели находили Вас сами).</li></ul>');

define('HELP_ANNOUNCE_OPTION_LANGUAGE_DEGREE', '<b>Уровни владения иностранными языками:</b><br><br><b>Нулевой</b> - Язык никогда не изучался. Использование и понимание только некоторых слов, приветствий, выражений. Знания грамматики нет.<br><br><b>Элементарный</b> - Ограниченный словарный запас, начальные знания грамматики. Понимаете простейшие предложения, объяснения и указания.<br><br><b>Ниже среднего</b> - Знание грамматики довольно хорошее, но словарный запас ограничен. В знакомых ситуациях возможно поддержание разговора, который ведётся неторопливо и чётко.<br><br><b>Средний</b> - Свободное владение повседневной тематикой, однако свобода выражения и словарный запас ограничены. Чтение, письмо и восприятие на слух на хорошем уровне.<br><br><b>Выше среднего</b> - Высокий уровень грамматики. Бегло читаете и говорите, допуская незначительные ошибки в речи. Свободное участие в разговорах на знакомые темы, можете вести споры и доказывать свою точку зрения.<br><br><b>Продвинутый</b> - Расширенный словарный запас и высокий уровень грамматики. Эффективное владение устной и письменной речью, однако, возможны ошибки в сложных предложениях и недостаток идиоматических оборотов. Легко читаете любой текст.<br><br><b>Экспертный</b> - Богатый словарный запас. Экспертный уровень знания грамматики, владения устной и письменной речью, свободное построение сложных предложений оборотов. Владение языком в совершенстве на уровне родного.');

define('HELP_VACANCY_INPUT_TITLE', 'Как правило, название вакансии — это первое что увидит соискатель.<br><br>Поэтому постарайтесь в этом заголовке указать наиболее точную информацию, описывающую вакантную должность.<br><br><b>Например:</b> Технический директор, Менеджер по продажам, Программист С++');

define('HELP_RESUME_INPUT_TITLE', 'Как правило, заголовок резюме — это первое что увидит работодатель.<br><br>Поэтому постарайтесь в этом заголовке указать наиболее ценную информацию, описывающую Ваши знания и направления деятельности.<br><br><b>Например:</b> Опытный программист PHP, Менеджер по продажам бытовых товаров, Секретарь со знанием английского языка.');

define('HELP_VACANCY_CHECKBOX_PUBLIC_EMAIL', '<b>ВНИМАНИЕ!</b> В целях защиты почтовых адресов наших пользователей от СПАМа, на сайте по умолчанию все Email указанные в анкетах при добавлении объявлений, будут скрыты.<br><br>Отправить сообщение, на скрытый адрес, можно с помощью специальной формы через наш сайт, нажав на кнопку &quot;Отправить сообщение&quot; на странице подробного просмотра объявления.<br><br>Если Вы располагаете публичным Email-адресом и хотите что бы он отображался при просмотре объявления, установите опцию: &quot;Показывать Email-адрес в объявлении&quot;');

define('HELP_RESUME_CHECKBOX_PUBLIC_EMAIL', '<b>ВНИМАНИЕ!</b> В целях защиты почтовых адресов наших пользователей от СПАМа, на сайте по умолчанию все Email указанные в анкетах при добавлении объявлений, будут скрыты.<br><br>Отправить сообщение, на скрытый адрес, можно с помощью специальной формы через наш сайт, нажав на кнопку &quot;Отправить сообщение&quot; на странице подробного просмотра объявления.<br><br>Если Вы располагаете публичным Email-адресом и хотите что бы он отображался при просмотре объявления, установите опцию: &quot;Показывать Email-адрес в объявлении&quot;');

define('HELP_RESUME_INPUT_EXPIRE_PERIOD', 'В этих полях необходимо указать период в который Вы работали на данном месте<br><br>Нужно обязательно указать месяц и год начала работы.<br><br>Оставьте поля даты окончания незаполненными, если Вы продолжаете там работать.');

define('HELP_RESUME_TEXTAREA_ABOUTINFO', 'Используйте это поле для того, чтобы дополнить резюме информацией, которую считаете важной и на которую также хотели бы обратить внимание работодателя.<br><br><b>Например:</b> увлечения, личные качества, жизненные принципы, достижения.');

/***** ФОРМЫ ПОДПИСКИ ПОЛЬЗОВАТЕЛЯ  *****/
define('HELP_SUBSCRIPTION_SEND_TEST_MAIL', '<p>Если Вы хотите получить тестовое письмо с объявлениями за последние N-часов, установите данный переключатель.</p><p>Данная настройка работает только для бесплатных подписок.</p>');

define('HELP_SUBSCRIPTION_FPA', 'F (free) - бесплатная; P (payment) - платная; A (announce) - добавленная с объявлением.');

/***** СТАТЬИ *****/
define('HELP_ARTICLES_PUBLICATION_DATE', '<p>Если дата публикации больше текущей даты, то новость/статья будет опубликована в установленное время. До этого времени новость/статья не появится в публичной части.</p><p>При установке даты публикации учитывайте, что новость/статья может быть отправлена на модерацию (это определяет администратор ресурса). В этом случае новость/статья появится в публичной части лишь после того, как пройдет модерацию (независимо от даты публикации)</p>');

