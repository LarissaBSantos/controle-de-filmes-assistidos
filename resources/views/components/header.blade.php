<div class="header">
  <button class="add-movie" onclick="showForm()">Adicionar novo filme</button>
</div>

<style scoped>
  div.header {
    height: 60px;
    padding: 16px;
    display: flex;
    align-items: center;
    justify-content: right;
  }

  button.add-movie {
    background-color: var(--primary-color);
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    border: none;
    font-weight: 600;
    cursor: pointer;
    display: inline-block;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  }

  button.add-movie:hover {
    background-color: #4f46e5;
    transform: translateY(-2px);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
  }

</style>