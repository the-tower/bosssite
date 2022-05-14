function copyClipboard(text) {
    var copyText = text;

    navigator.clipboard.writeText(copyText);

    alert("Copied id to clipboard!");
}
