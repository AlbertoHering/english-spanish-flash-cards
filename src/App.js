import './App.css';
import FlashCards from "./components/FlashCards"

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <h1>English-Spanish Flash Cards</h1>
      </header>
      <FlashCards />
      <footer>
        <h6>Proyecto creado en React por Alberto Hering. 2021</h6>
      </footer>
    </div>
  );
}

export default App;
