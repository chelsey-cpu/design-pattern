class LocalATM {
    public function readCard(LocalATMCard $card): void {
        echo $card->insertToLocalATM();
    }
}