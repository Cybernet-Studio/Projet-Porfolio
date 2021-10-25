class Tabs extends HTMLElement{
    connectedCallback(){
        this.setAttribute('role', 'tablist')
        const tabs= Array.from(this.children)

        for (const tab of tabs){
            const id = tab.getAttribute('href').replace('#', '')
            const tabpanel = document.getElementById(id)
            tab.setAttribute('role', 'tab')
            tab.setAttribute('aria-selected', 'false')
            tab.setAttribute('tabindex', '-1')
            tab.setAttribute('aria-controls', id)
            tab.setAttribute('id', 'tab-'+id)

            tabpanel.setAttribute('role', 'tabpanel')
            tabpanel.setAttribute('aria-labelledby', 'tab-'+id)
            tabpanel.setAttribute('hidden', 'hidden')
            tabpanel.setAttribute('tabindex', '0')

            tab.addEventListener('click', e=>{
                e.preventDefault()
                this.activate(tab)
            })
        }
        this.activate(tabs[0])
    }
    activate(tab){
        const currenTab =this.querySelector('[aria-selected="true"]')
        if(currenTab !== null){
            const tabpanel = document.getElementById(currenTab.getAttribute('aria-controls'))
            currenTab.setAttribute('aria-selected', 'false')
            currenTab.setAttribute('tabindex', '-1')
            tabpanel.setAttribute('hidden', 'hidden')
        }
        const id = tab.getAttribute('aria-controls')
        const tabpanel = document.getElementById(id)  
        tab.setAttribute('aria-selected', 'true')
        tab.setAttribute('tabindex', '0')
        tabpanel.removeAttribute('hidden')
    }
}
customElements.define('nav-tabs', Tabs);
