$(function() {

    const observerOptions = {
        threshold: 0.2  // 20%表示されたら
    };

    const sectionTitle = document.querySelectorAll('.section-title');
    const sectionTitleObserver = new IntersectionObserver((entries, sectionTitleObserver) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                sectionTitleObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);
    sectionTitle.forEach(content => {
        sectionTitleObserver.observe(content);
    });
    const sectionContent = document.querySelectorAll('.section-content');
    const sectionContentObserver = new IntersectionObserver((entries, sectionContentObserver) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                sectionContentObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);
    sectionContent.forEach(content => {
        sectionContentObserver.observe(content);
    });

    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });

});
