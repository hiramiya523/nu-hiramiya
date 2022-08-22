// 作成したTitleコンポーネントを読み込む
import Title from '../components/Title'
import Selector from '../components/Selector';

const TopPage = () => {
    return (
        <div>
            {/* Titleコンポーネントを書き出す. タグは大文字で始めることに注意 */}
            <Title />
            <Selector />
        </div>
    );
}

export default TopPage;