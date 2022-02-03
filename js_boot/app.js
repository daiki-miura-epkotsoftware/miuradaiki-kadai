//配列の中にオブジェクトを入れ、そのオブジェクト内に配列を入れる
//クイズ問題と回答候補、正解を定義する配列
const quiz = [
{
    question: 'お土産「鳩サブレー」のご当地は次の内どれ？',
    answers: [
        '愛知県',
        '神奈川県',
        '栃木県',
        '東京都'
    ],
    correct: '神奈川県'
},
{
    question: 'お土産「萩の月」のご当地は次の内どれ？',
    answers: [
        '北海道',
        '兵庫県',
        '滋賀県',
        '宮城県'
    ],
    correct: '宮城県'
},
{
    question: 'お土産「雷鳥の里」のご当地は次の内どれ？',
    answers: [
        '長野県',
        '岐阜県',
        '石川県',
        '和歌山県'
    ],
    correct: '長野県'
}
];

const quizLength = quiz.length;
let quizIndex = 0;
let score = 0;

const $button = document.getElementsByTagName('button'); //HTMLのオブジェクトを取ってくる場合、$を付ける
const buttonLength = $button.length;

//クイズの問題文、選択肢を定義
const setupQuiz = () => {
    document.getElementById('js-question').textContent=quiz[quizIndex].question; //定数の文字列をHTMLに反映させる
    let buttonIndex = 0;
    while(buttonIndex < buttonLength){
        $button[buttonIndex].textContent=quiz[quizIndex].answers[buttonIndex];
        buttonIndex++;
    }
}

setupQuiz();

//クリックしたときクイズ正誤判定する関数を定義
const clickHandler = (e) => {
    if(quiz[quizIndex].correct === e.target.textContent){
        window.alert('正解！');
        score++;
    }else{
        window.alert('不正解！');
    }
    quizIndex++;
    if(quizIndex < quizLength){
        //問題数がまだあればこちらを実行
        setupQuiz();
    }else{
        //問題数がもうなければこちらを実行
        window.alert('終了！あなたの正解数は' + score + '/' + quizLength + 'です！');    
    }
}

//ボタンをクリックしたら正誤判定
let handlerIndex = 0;
while(handlerIndex < buttonLength){
    $button[handlerIndex].addEventListener('click', (e) =>{
        clickHandler(e);
    });
    handlerIndex++;
}


